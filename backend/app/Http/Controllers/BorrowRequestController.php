<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\BorrowRequestResource;
use App\Models\BorrowRequestModel;
use App\Models\BorrowRequestStudentModel;
use App\Models\BorrowRequestSummaryModel;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BorrowRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = BorrowRequestModel::with('user', 'handledBy', 'items', 'summary', 'authorizedStudents');

        if ($request->has('user_id')) {
            $query->where('user_id', $request->query('user_id'));
        }

        $requests = $query->get();

        return response()->json([
            'message' => 'Borrow Requests retrieved successfully.',
            'total' => $requests->count(),
            'data' => BorrowRequestResource::collection($requests)
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:tbl_users,user_id',
            'purpose' => 'nullable|string',
            'remarks' => 'nullable|string',
            'authorized_student' => 'nullable|array',
            'authorized_student.*.name' => 'required|string|max:100',
            'authorized_student.*.student_id' => 'required|string|max:50',
            'items' => 'required|array|min:1',
            'items.*.item_id' => 'required|exists:tbl_items,item_id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        try {
            $borrowRequest = BorrowRequestModel::create([
                'user_id' => $validated['user_id'],
                'purpose' => $validated['purpose'] ?? null,
                'remarks' => $validated['remarks'] ?? null,
                'status' => 'PENDING',
                'request_date' => now(),
            ]);

            // Save Borrow Request Items
            foreach ($validated['items'] as $item) {
                BorrowRequestSummaryModel::create([
                    'request_id' => $borrowRequest->request_id,
                    'item_id' => $item['item_id'],
                    'quantity' => $item['quantity'],
                ]);
            }

            // Save Authorized Students if provided
            if (isset($validated['authorized_student'])) {
                foreach ($validated['authorized_student'] as $student) {
                    BorrowRequestStudentModel::create([
                        'request_id' => $borrowRequest->request_id,
                        'student_id' => $student['student_id'],
                        'name' => $student['name'],
                    ]);
                }
            }

            return response()->json([
                'message' => 'Borrow request created successfully.',
                'data' => new BorrowRequestResource($borrowRequest->load('items', 'summary', 'authorizedStudents'))
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create borrow request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $request = BorrowRequestModel::with('user', 'handledBy', 'items', 'summary', 'authorizedStudents')->findOrFail($id);
            return response()->json([
                'message' => 'Borrow Request retrieved successfully.',
                'data' => new BorrowRequestResource($request)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'No request found'
            ], 404);
        }
    }

    /**
     * Update borrow request status (for admin).
     */
    public function updateRequestStatus(Request $request, string $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:PENDING,APPROVED,REJECTED,CANCELLED',
            'handled_by' => 'required|exists:tbl_users,user_id',
        ]);

        try {
            $borrowRequest = BorrowRequestModel::findOrFail($id);

            $borrowRequest->update([
                'status' => $validated['status'],
                'handled_by' => $validated['handled_by'],
            ]);

            return response()->json([
                'message' => 'Borrow request status updated successfully.',
                'data' => new BorrowRequestResource($borrowRequest->fresh('user', 'handledBy', 'items', 'summary'))
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Borrow request not found.'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update borrow request status.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateRequestDetails(Request $request, string $id)
    {
        $validated = $request->validate([
            'purpose' => 'nullable|string',
            'remarks' => 'nullable|string',
            'items' => 'required|array|min:1',
            'items.*.item_id' => 'required|exists:tbl_items,item_id',
            'items.*.quantity' => 'required|integer|min:1',
            'authorized_student' => 'nullable|array',
            'authorized_student.*.name' => 'required|string|max:100',
            'authorized_student.*.student_id' => 'required|string|max:50|unique:tbl_borrow_request_students,student_id',
        ]);

        try {
            $borrowRequest = BorrowRequestModel::with('summary', 'authorizedStudents')->findOrFail($id);

            if ($borrowRequest->status !== 'PENDING') {
                return response()->json([
                    'message' => 'Cannot update request details unless the request is pending.'
                ], 403);
            }

            // Update Borrow Request Details
            $borrowRequest->purpose = $validated['purpose'];
            $borrowRequest->remarks = $validated['remarks'] ?? null;
            $borrowRequest->save();

            // Update Borrow Request Items
            foreach ($validated['items'] as $item) {
                $existingSummary = BorrowRequestSummaryModel::where('request_id', $borrowRequest->request_id)
                    ->where('item_id', $item['item_id'])
                    ->first();

                if ($existingSummary) {
                    $existingSummary->quantity = $item['quantity'];
                    $existingSummary->save();
                } else {
                    BorrowRequestSummaryModel::create([
                        'request_id' => $borrowRequest->request_id,
                        'item_id' => $item['item_id'],
                        'quantity' => $item['quantity'],
                    ]);
                }
            }

            // Update Authorized Students (add new ones)
            if (isset($validated['authorized_student'])) {
                foreach ($validated['authorized_student'] as $student) {
                    $existingStudent = BorrowRequestStudentModel::where('request_id', $borrowRequest->request_id)
                        ->where('student_id', $student['student_id'])
                        ->first();

                    if (!$existingStudent) {
                        BorrowRequestStudentModel::create([
                            'request_id' => $borrowRequest->request_id,
                            'student_id' => $student['student_id'],
                            'name' => $student['name'],
                        ]);
                    }
                }
            }

            return response()->json([
                'message' => 'Borrow request details updated successfully.',
                'data' => new BorrowRequestResource($borrowRequest->fresh('items', 'summary', 'authorizedStudents'))
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Borrow request not found.'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to update borrow request details.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = BorrowRequestModel::findOrFail($id);
        $request->delete();
        return response()->json([
            'message' => 'Request deleted successfully.'
        ], 200);
    }
}

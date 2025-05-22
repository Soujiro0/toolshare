<?php

namespace App\Http\Controllers;

use App\Models\BorrowRequestItemsModel;
use App\Http\Resources\BorrowRequestItemResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BorrowRequestItemController extends Controller
{
    // Display a listing of the assigned units
    public function index(Request $request)
    {
        try {
            $query = BorrowRequestItemsModel::with('unit.item');

            // Filter by unit_id if provided
            if ($request->filled('unit_id')) {
                $query->whereHas('unit', function ($q) use ($request) {
                    $q->where('unit_id', $request->unit_id); // use correct column here
                });
            }

            // Filter by request_id if provided
            if ($request->filled('request_id')) {
                $query->where('request_id', $request->request_id);
            }

            $assignedUnits = $query->get();

            return response()->json([
                'success' => true,
                'message' => 'Items retrieved successfully.',
                'total' => $assignedUnits->count(),
                'data' => BorrowRequestItemResource::collection($assignedUnits)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }


    // Store (assign units to a request)
    public function store(Request $request)
    {
        $request_id = $request->input('request_id');
        $units = $request->input('assigned_units');

        // Validate request payload
        if (!$request_id || !is_array($units) || empty($units)) {
            return response()->json([
                'success' => false,
                'error' => "Invalid payload. Missing 'request_id' or 'assigned_units'."
            ], 400);
        }

        try {
            DB::beginTransaction();

            // Validate borrow request
            $borrowRequest = DB::table('tbl_borrow_requests')->where('request_id', $request_id)->first();

            if (!$borrowRequest) {
                throw new \Exception("Borrow request not found.");
            }

            if ($borrowRequest->status !== 'APPROVED') {
                throw new \Exception("Borrow request is not approved.");
            }

            $insertData = [];
            $unitIdsToUpdate = [];

            foreach ($units as $unit) {
                $unit_id = $unit['unit_id'] ?? null;
                $condition = $unit['item_condition_out'] ?? null;

                if (!$unit_id || !$condition) {
                    throw new \Exception("Each assigned unit must include 'unit_id' and 'item_condition_out'.");
                }

                // Validate unit belongs to requested item and is available
                $unitData = DB::table('tbl_item_units as iu')
                    ->join('tbl_borrow_request_summary as brs', function ($join) use ($request_id) {
                        $join->on('iu.item_id', '=', 'brs.item_id')
                            ->where('brs.request_id', '=', $request_id);
                    })
                    ->where('iu.unit_id', $unit_id)
                    ->select('iu.unit_id', 'iu.status')
                    ->first();

                if (!$unitData) {
                    throw new \Exception("Unit ID $unit_id is not part of the requested items.");
                }

                if ($unitData->status !== 'AVAILABLE') {
                    throw new \Exception("Unit ID $unit_id is not available (status: {$unitData->status}).");
                }

                $insertData[] = [
                    'request_id' => $request_id,
                    'unit_id' => $unit_id,
                    'item_condition_out' => $condition,
                ];

                $unitIdsToUpdate[] = $unit_id;
            }

            // Insert assigned units
            DB::table('tbl_borrow_request_items')->insert($insertData);

            // Update unit statuses to 'IN_USE'
            DB::table('tbl_item_units')
                ->whereIn('unit_id', $unitIdsToUpdate)
                ->update(['status' => 'IN_USE']);

            // Update request status to 'CLAIMED'
            DB::table('tbl_borrow_requests')
                ->where('request_id', $request_id)
                ->update([
                    'status' => 'CLAIMED',
                    'processed_date' => now()->toDateTimeString()
                ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => "Units successfully assigned to request ID $request_id"
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }

    // Display the specified assigned unit by its ID
    public function show($unit_id)
    {
        try {
            $assignedUnit = BorrowRequestItemsModel::with('unit')
                ->where('unit_id', $unit_id)
                ->firstOrFail();

            return response()->json([
                'success' => true,
                'message' => 'Item retrieved successfully.',
                'data' => new BorrowRequestItemResource($assignedUnit)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }

    // Update the specified assigned unit
    // This method handles two cases:
    // 1. Returning items (has request_id and returned_units)
    // 2. Updating assigned unit's status or condition (has item_condition_out and status)
    public function update(Request $request, $unit_id)
    {
        try {
            // Validate required fields
            if (!$unit_id || !$request->has(['item_condition_out', 'status'])) {
                return response()->json([
                    'success' => false,
                    'error' => "Missing required fields: 'unit_id', 'item_condition_out', or 'status'."
                ], 400);
            }

            $item_condition_out = $request->input('item_condition_out');
            $status = $request->input('status');

            $validStatuses = ['AVAILABLE', 'IN_USE', 'UNDER_MAINTENANCE'];
            if (!in_array($status, $validStatuses)) {
                return response()->json([
                    'success' => false,
                    'error' => "Invalid status. Must be one of: " . implode(', ', $validStatuses)
                ], 400);
            }

            // Start transaction
            DB::beginTransaction();

            // Update item condition in borrow request item
            DB::table('tbl_borrow_request_items')
                ->where('unit_id', $unit_id)
                ->update(['item_condition_out' => $item_condition_out]);

            // Update unit status
            DB::table('tbl_item_units')
                ->where('unit_id', $unit_id)
                ->update(['status' => $status]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => "Unit successfully updated."
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Remove the specified assigned unit from a request
    public function destroy($request_id, $unit_id)
    {
        try {
            // Ensure both request_id and unit_id are provided
            if (!$request_id || !$unit_id) {
                return response()->json([
                    'success' => false,
                    'error' => "Missing request_id or unit_id"
                ], 400);
            }

            // Perform deletion from tbl_borrow_request_items table
            $deletedFromRequestItems = DB::table('tbl_borrow_request_items')
                ->where('request_id', $request_id)
                ->where('unit_id', $unit_id)
                ->delete();

            // Optionally, delete from tbl_item_units table if needed
            $deletedFromItemUnits = DB::table('tbl_item_units')
                ->where('unit_id', $unit_id)
                ->delete();

            // Check if deletion was successful
            if ($deletedFromRequestItems || $deletedFromItemUnits) {
                return response()->json([
                    'success' => true,
                    'message' => "Assigned item deleted successfully."
                ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => "Failed to delete assigned item."
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // New method for returned units
    public function returnItems(Request $request)
    {
        try {
            $request_id = $request->input('request_id');
            $returned_units = $request->input('returned_units');

            if (!is_array($returned_units) || empty($returned_units)) {
                return response()->json([
                    'success' => false,
                    'error' => "Invalid payload. 'returned_units' must be a non-empty array."
                ], 400);
            }

            // Start the transaction
            DB::beginTransaction();

            // Process each returned unit
            foreach ($returned_units as $unit) {
                // Validate required fields
                if (!isset($unit['unit_id'], $unit['damage_status'])) {
                    throw new \Exception("Each returned unit must include 'unit_id' and 'damage_status'.");
                }

                $unit_id = $unit['unit_id'];
                $damage_status = $unit['damage_status'];
                $damage_notes = $unit['damage_notes'] ?? null;

                // Check if the item already has a return date
                $existingItem = DB::table('tbl_borrow_request_items')
                    ->where('request_id', $request_id)
                    ->where('unit_id', $unit_id)
                    ->first();


                // Skip if item already has a return date
                if ($existingItem && $existingItem->returned_date) {
                    continue;
                }

                // Only update return date if it's not already set
                $updateData = [
                    'damage_status' => $damage_status,
                    'damage_notes' => $damage_notes,
                    'item_condition_in' => $this->mapDamageStatusToCondition($damage_status),
                    'returned_date' => now()->toDateTimeString() // Format the timestamp
                ];

                // Update borrow request item with return info
                DB::table('tbl_borrow_request_items')
                    ->where('request_id', $request_id)
                    ->where('unit_id', $unit_id)
                    ->update($updateData);

                // Mark unit as available again in tbl_item_units
                DB::table('tbl_item_units')
                    ->where('unit_id', $unit_id)
                    ->update(['status' => 'AVAILABLE']);
            }

            // Commit the transaction
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => "Returned units successfully updated."
            ], 200);
        } catch (\Exception $e) {
            // Rollback the transaction if anything goes wrong
            DB::rollBack();
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }

    private function mapDamageStatusToCondition($damage_status)
    {
        // Map the damage status to a corresponding item_condition_in value
        switch ($damage_status) {
            case 'UNDAMAGED':
                return 'EXCELLENT'; // Example: Set 'UNDAMAGED' to 'EXCELLENT'
            case 'DAMAGED':
                return 'POOR'; // Example: Set 'DAMAGED' to 'POOR'
            default:
                return 'GOOD'; // Default fallback
        }
    }
}

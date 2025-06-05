<?php

namespace App\Http\Controllers;

use App\Models\ItemUnitModel;
use App\Http\Resources\ItemUnitResource;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Helpers\ItemUnitHelper;
class ItemUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $itemUnits = ItemUnitModel::with('item')->get();
            return response()->json([
                'success' => true,
                'message' => 'Item units retrieved successfully.',
                'total' => $itemUnits->count(),
                'data' => ItemUnitResource::collection($itemUnits)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving item units.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'item_id' => 'required|exists:tbl_items,item_id',
                'brand' => 'nullable|string|max:100',
                'model' => 'nullable|string|max:100',
                'specification' => 'nullable|string',
                'item_condition' => 'in:GOOD,FAIR,DAMAGED,LOST',
                'availability_status' => 'in:AVAILABLE,BORROWED,NOT_AVAILABLE',
                'operational_status' => 'in:OPERATIONAL,UNDER_MAINTENANCE,FOR_DISPOSAL',
                'date_acquired' => 'nullable|date',
            ]);

            $data = $request->all();
            $data['property_no'] = ItemUnitHelper::generatePropertyNumbers($request['item_id'], 1)[0];

            $itemUnit = ItemUnitModel::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Item unit created successfully.',
                'data' => new ItemUnitResource($itemUnit->load('item'))
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating item unit',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $itemUnit = ItemUnitModel::with('item')->findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Item unit retrieved successfully.',
                'data' => new ItemUnitResource($itemUnit)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item unit found.',
                'error' => $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving item unit.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $itemUnit = ItemUnitModel::findOrFail($id);

            $request->validate([
                'brand' => 'nullable|string|max:100',
                'model' => 'nullable|string|max:100',
                'specification' => 'nullable|string',
                'item_condition' => 'in:EXCELLENT,GOOD,FAIR,POOR',
                'status' => 'in:AVAILABLE,IN_USE,UNDER_MAINTENANCE',
                'date_acquired' => 'nullable|date',
            ]);

            $itemUnit->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Item unit updated successfully.',
                'data' => new ItemUnitResource($itemUnit->load('item'))
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating item unit.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $itemUnit = ItemUnitModel::findOrFail($id);
            $itemUnit->delete();

            return response()->json([
                'success' => true,
                'message' => 'Item unit deleted successfully.'
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item unit found.',
                'error' => $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting item unit.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ItemUnitModel;
use App\Http\Resources\ItemUnitResource;
use Illuminate\Http\Request;

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
                'message' => 'Item units retrieved successfully.',
                'total' => $itemUnits->count(),
                'data' => ItemUnitResource::collection($itemUnits)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
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
        $request->validate([
            'item_id' => 'required|exists:tbl_items,item_id',
            'property_no' => 'required|string|unique:tbl_item_units,property_no',
            'brand' => 'nullable|string|max:100',
            'model' => 'nullable|string|max:100',
            'specification' => 'nullable|string',
            'item_condition' => 'in:EXCELLENT,GOOD,FAIR,POOR',
            'status' => 'in:AVAILABLE,IN_USE,UNDER_MAINTENANCE',
            'date_acquired' => 'nullable|date',
        ]);

        $itemUnit = ItemUnitModel::create($request->all());

        return response()->json([
            'message' => 'Item unit created successfully.',
            'data' => new ItemUnitResource($itemUnit->load('item'))
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $itemUnit = ItemUnitModel::with('item')->findOrFail($id);
        return response()->json([
            'message' => 'Item unit retrieved successfully.',
            'data' => new ItemUnitResource($itemUnit)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $itemUnit = ItemUnitModel::findOrFail($id);
        $request->validate([
            // 'item_id' => 'required|exists:tbl_items,item_id',
            // 'property_no' => 'required|string|unique:tbl_item_units,property_no,' . $itemUnit->unit_id . ',unit_id',
            'brand' => 'nullable|string|max:100',
            'model' => 'nullable|string|max:100',
            'specification' => 'nullable|string',
            'item_condition' => 'in:EXCELLENT,GOOD,FAIR,POOR',
            'status' => 'in:AVAILABLE,IN_USE,UNDER_MAINTENANCE',
            'date_acquired' => 'nullable|date',
        ]);

        $itemUnit->update($request->all());

        return response()->json([
            'message' => 'Item unit updated successfully.',
            'data' => new ItemUnitResource($itemUnit->load('item'))
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $itemUnit = ItemUnitModel::findOrFail($id);
        $itemUnit->delete();

        return response()->json([
            'message' => 'Item unit deleted successfully.'
        ], 200);
    }
}

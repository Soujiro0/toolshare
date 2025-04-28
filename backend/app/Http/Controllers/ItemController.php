<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\ItemUnitModel;
use App\Http\Resources\ItemResource;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ItemModel::with('category', 'units')->get();
        return response()->json([
            'message' => 'Items retrieved successfully.',
            'total' => $items->count(),
            'data' => ItemResource::collection($items)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer|exists:tbl_item_category,category_id',
            'unit' => 'required|string|max:20',
            'acquisition_date' => 'nullable|date'
        ]);

        $item = ItemModel::create($request->all());
        return response()->json([
            'message' => 'Item created succesfully',
            'data' => new ItemResource($item->load('category'))
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $item = ItemModel::with('category', 'units')->findOrFail($id);
            return response()->json([
                'message' => 'Item retrieved successfully.',
                'data' => new ItemResource($item)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'No item found'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer|exists:tbl_item_category,category_id',
            'unit' => 'required|string|max:20',
            'acquisition_date' => 'nullable|date'
        ]);

        $item = ItemModel::findOrFail($id);
        $item->update($request->only(['name', 'category_id', 'unit', 'acquisition_date']));
        return response()->json([
            'message' => 'Item updated successfully.',
            'data' => new ItemResource($item->load('category', 'units'))
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = ItemModel::findOrFail($id);
        $item->delete();
        return response()->json([
            'message' => 'Item deleted successfully.'
        ], 200);
    }

    /**
     * Create a new item with single/multiple units.
     */
    public function storeWithUnits(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer|exists:tbl_item_category,category_id',
            'unit' => 'required|string|max:20',
            'acquisition_date' => 'nullable|date',
            'units' => 'required|array|min:1',
            'units.*.brand' => 'nullable|string|max:100',
            'units.*.model' => 'nullable|string|max:100',
            'units.*.specification' => 'nullable|string',
            'units.*.item_condition' => 'required|in:EXCELLENT,GOOD,FAIR,POOR',
            'units.*.quantity' => 'required|integer|min:1',
        ]);

        // Check if the item already exists by name
        $item = ItemModel::where('name', $request->name)->first();

        // Step 1: Create the item
        // If the item doesn't exist, create a new one
        if (!$item) {
            $item = ItemModel::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'unit' => $request->unit,
                'acquisition_date' => $request->acquisition_date
            ]);
        }

        // Step 2: Get last used property_no suffix
        $lastUnit = ItemUnitModel::where('item_id', $item->item_id)
            ->orderByDesc('unit_id')
            ->first();

        $suffix = 0;
        if ($lastUnit && preg_match('/\d{3}$/', $lastUnit->property_no, $matches)) {
            $suffix = (int) $matches[0];
        }

        // Step 3: Loop and create units
        $unitData = [];

        foreach ($request->units as $unit) {
            for ($i = 0; $i < $unit['quantity']; $i++) {
                $suffix++;
                $unitData[] = [
                    'item_id' => $item->item_id,
                    'property_no' => sprintf("%d-%03d", $item->item_id, $suffix),
                    'brand' => $unit['brand'] ?? null,
                    'model' => $unit['model'] ?? null,
                    'specification' => $unit['specification'] ?? null,
                    'item_condition' => $unit['item_condition'],
                    'status' => 'AVAILABLE',
                    'date_acquired' => $request->acquisition_date,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        ItemUnitModel::insert($unitData);

        return response()->json([
            'message' => 'Item and units created successfully.',
            'units_created' => count($unitData),
            'data' => new ItemResource($item->load('category'))
        ], 201);
    }
}

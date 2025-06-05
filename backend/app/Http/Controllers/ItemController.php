<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\ItemUnitModel;
use App\Http\Resources\ItemResource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use App\Helpers\ImageUploadHelper;
use App\Helpers\ItemUnitHelper;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $items = ItemModel::with('category', 'units')->get();
            return response()->json([
                'success' => true,
                'message' => 'Items retrieved successfully.',
                'total' => $items->count(),
                'data' => ItemResource::collection($items)
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving items.',
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
                'name' => 'required|string',
                'category_id' => 'required|integer|exists:tbl_item_category,category_id',
                'unit_of_measure' => 'required|string|max:20',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $data = $request->only(['name', 'category_id', 'unit_of_measure']);

            if ($request->hasFile('image')) {
                $imagePath = ImageUploadHelper::handle($request, 'image', 'items');
                $data['image_url'] = $imagePath;
            }

            $item = ItemModel::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Item created successfully.',
                'data' => new ItemResource($item->load('category'))
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating item.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $item = ItemModel::with('category', 'units')->findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Item retrieved successfully.',
                'data' => new ItemResource($item)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item found.',
                'error' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving item.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|integer|exists:tbl_item_category,category_id',
                'unit_of_measure' => 'required|string|max:20',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'remove_image' => 'nullable|boolean'
            ]);

            $item = ItemModel::findOrFail($id);
            $data = $request->only(['name', 'category_id', 'unit_of_measure']);

            if ($request->boolean('remove_image')) {
                if ($item->image_path) {
                    Storage::disk('public')->delete($item->image_path);
                    $data['image_path'] = null;
                }
            }

            if ($request->hasFile('image')) {
                if ($item->image_path) {
                    Storage::disk('public')->delete($item->image_path);
                }
                $imagePath = ImageUploadHelper::handle($request, 'image', 'items');
                $data['image_url'] = $imagePath;
            }

            $item->update($data);

            return response()->json([
                'success' => true,
                'message' => 'Item updated successfully.',
                'data' => new ItemResource($item->load('category', 'units'))
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating item.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $item = ItemModel::findOrFail($id);
            $item->delete();
            return response()->json([
                'success' => true,
                'message' => 'Item deleted successfully.'
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item found.',
                'error' => $e->getMessage()
            ], 404);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting item.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Create a new item with single/multiple units.
     */
    public function storeItemWithItemUnits(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|integer|exists:tbl_item_category,category_id',
                'unit_of_measure' => 'required|string|max:20',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'item_units' => 'required|array|min:1',
                'item_units.*.brand' => 'nullable|string|max:100',
                'item_units.*.model' => 'nullable|string|max:100',
                'item_units.*.specification' => 'nullable|string',
                'item_units.*.item_condition' => 'required|in:EXCELLENT,GOOD,FAIR,POOR',
                'item_units.*.quantity' => 'required|integer|min:1',
            ]);

            // Check if the item already exists by name
            $item = ItemModel::where('name', $request->name)->first();

            // Prepare image URL if file present
            $imageUrl = null;
            if ($request->hasFile('image')) {
                try {
                    $imagePath = ImageUploadHelper::handle($request, 'image', 'items');
                    $imageUrl = $imagePath;
                } catch (Exception $e) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Error uploading image.',
                        'error' => $e->getMessage()
                    ], 500);
                }
            }

            // Step 1: Create the item if it doesn't exist
            if (!$item) {
                $itemData = [
                    'name' => $request->name,
                    'category_id' => $request->category_id,
                    'unit_of_measure' => $request->unit_of_measure,
                ];

                // Change image_url to image_path
                if ($imageUrl) {
                    $itemData['image_path'] = str_replace(url('storage/'), '', $imageUrl);
                }

                $item = ItemModel::create($itemData);
            } else if ($request->hasFile('image')) {
                // Update existing item's image if a new one is provided
                // Delete old image if exists
                if ($item->image_path) {
                    Storage::disk('public')->delete($item->image_path);
                }
                // Change image_url to image_path
                $item->update(['image_path' => str_replace(url('storage/'), '', $imageUrl)]);
            }

            // Step 2: Generate property numbers for all units
            $totalUnits = array_sum(array_column($request->item_units, 'quantity'));
            $propertyNumbers = ItemUnitHelper::generatePropertyNumbers($item->item_id, $totalUnits);

            // Step 3: Loop and create units
            $unitData = [];
            $index = 0;

            foreach ($request->item_units as $item_unit) {
                for ($i = 0; $i < $item_unit['quantity']; $i++) {
                    $unitData[] = [
                        'item_id' => $item->item_id,
                        'property_no' => $propertyNumbers[$index++],
                        'brand' => $item_unit['brand'] ?? null,
                        'model' => $item_unit['model'] ?? null,
                        'specification' => $item_unit['specification'] ?? null,
                        'item_condition' => $item_unit['item_condition'],
                        'availability_status' => 'AVAILABLE',
                        'operational_status' => 'OPERATIONAL',
                        'date_acquired' => now(),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            ItemUnitModel::insert($unitData);

            return response()->json([
                'success' => true,
                'message' => 'Item and units created successfully.',
                'units_created' => count($unitData),
                'data' => new ItemResource($item->load('category'))
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating item with units.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

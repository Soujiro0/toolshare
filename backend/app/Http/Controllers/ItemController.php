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

    protected function handleImageUpload(Request $request)
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');

        if (!$file->isValid()) {
            throw new Exception('Uploaded file is not valid.');
        }

        // Store in 'public/items' folder and return just the path
        return $file->store('items', 'public');
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
                'unit' => 'required|string|max:20',
                'acquisition_date' => 'nullable|date',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            // Only take needed fields
            $data = $request->only(['name', 'category_id', 'unit', 'acquisition_date']);

            // Handle image upload
            if ($request->hasFile('image')) {
                $data['image_url'] = $this->handleImageUpload($request);
            }

            $item = ItemModel::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Item created successfully',
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
                'message' => 'No item found',
                'error' => $e->getMessage()
            ], 404);
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
                'unit' => 'required|string|max:20',
                'acquisition_date' => 'nullable|date',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'remove_image' => 'nullable|boolean'  // Add this validation rule
            ]);

            $item = ItemModel::findOrFail($id);
            $data = $request->only(['name', 'category_id', 'unit', 'acquisition_date']);

            // Handle image removal
            if ($request->boolean('remove_image')) {
                if ($item->image_path) {
                    Storage::disk('public')->delete($item->image_path);
                    $data['image_path'] = null;  // Set image_path to null
                }
            }

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($item->image_path) {
                    Storage::disk('public')->delete($item->image_path);
                }
                $data['image_path'] = $this->handleImageUpload($request);
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
                'message' => 'Item deleted successfully.'
            ], 200);
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
    public function storeWithUnits(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|integer|exists:tbl_item_category,category_id',
                'unit' => 'required|string|max:20',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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

            // Prepare image URL if file present
            $imageUrl = null;
            if ($request->hasFile('image')) {
                try {
                    $imageUrl = $this->handleImageUpload($request);
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
                    'unit' => $request->unit,
                    'acquisition_date' => $request->acquisition_date,
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

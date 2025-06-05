<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\ItemCategoryModel;
use App\Http\Resources\ItemCategoryResource;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = ItemCategoryModel::all();
            return response()->json([
                'success' => true,
                'message' => 'Item categories retrieved successfully.',
                'total' => $categories->count(),
                'data' => ItemCategoryResource::collection($categories)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving categories.',
                'error' => $e->getMessage(),
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
                'category_name' => 'required|string|unique:tbl_item_category'
            ]);
            $category = ItemCategoryModel::create($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Item category created successfully.',
                'data' => new ItemCategoryResource($category)
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating item category.',
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
            $category = ItemCategoryModel::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Item category retrived successfully.',
                'data' =>  new ItemCategoryResource($category)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item category found.',
                'error' =>  $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving item category.',
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
            $request->validate([
                'category_name' => 'required|string|unique:tbl_item_category,category_name,' . $id . ',category_id'
            ]);

            $itemCategory = ItemCategoryModel::findOrFail($id);
            $itemCategory->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Item category updated successfully.',
                'data' => new ItemCategoryResource($itemCategory),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating item category.',
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
            $itemCategory = ItemCategoryModel::findOrFail($id);
            $itemCategory->delete();
            return response()->json([
                'success' => true,
                'message' => 'Item category delete successfully.'
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No item category found.',
                'error' => $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting item category.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

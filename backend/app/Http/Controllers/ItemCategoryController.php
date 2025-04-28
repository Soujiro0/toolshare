<?php

namespace App\Http\Controllers;

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
        $categories = ItemCategoryModel::all();
        return response()->json([
            'message' => 'Item categories retrieved successfully.',
            'total' => $categories->count(),
            'data' => ItemCategoryResource::collection($categories)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|unique:tbl_item_category'
        ]);
        $category = ItemCategoryModel::create($request->all());
        return response()->json([
            'message' => 'Item category created successfully.',
            'data' => new ItemCategoryResource($category)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = ItemCategoryModel::findOrFail($id);
        return response()->json([
            'message' => 'Item category retrived successfully.',
            'data' =>  new ItemCategoryResource($category)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'category_name' => 'required|string|unique:tbl_item_category,category_name,' . $id . ',category_id'
        ]);

        $itemCategory = ItemCategoryModel::findOrFail($id);
        $itemCategory->update($request->all());
        return response()->json([
            'message' => 'Item category updated successfully.',
            'data' => new ItemCategoryResource($itemCategory),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $itemCategory = ItemCategoryModel::findOrFail($id);
        $itemCategory->delete();
        return response()->json([
            'message' => 'Item category delete successfully.'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Exception;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserModel::with('role')->get();
        return response()->json([
            'message' => 'Items retrieved successfully.',
            'total' => $users->count(),
            'data' => UserResource::collection($users)
        ], 200);
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
                // 'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'username' => 'required|string|unique:tbl_users,username',
                'name' => 'required|string',
                'email' => 'required|email|unique:tbl_users,email',
                'password' => 'required|string|min:8',
                'role_id' => 'required|integer|exists:tbl_roles,role_id'
            ]);

            // Prepare image URL if file present
            // $imageUrl = null;
            // if ($request->hasFile('image')) {
            //     try {
            //         $imageUrl = $this->handleImageUpload($request);
            //     } catch (Exception $e) {
            //         return response()->json([
            //             'success' => false,
            //             'message' => 'Error uploading image.',
            //             'error' => $e->getMessage()
            //         ], 500);
            //     }
            // }

            $data = $request->all();
            // $data['profile_path'] = $imageUrl;
            $data['password'] = bcrypt($data['password']);
            $data['date_created'] = now();
            $data['last_updated'] = now();

            $user = UserModel::create($data);

            return response()->json([
                'message' => 'User created successfully.',
                'data' => new UserResource($user->load('role'))
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error creating user.',
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
            $user = UserModel::with('role')->findOrFail($id);

            return response()->json([
                'message' => 'Item retrieved successfully.',
                'data' => new UserResource($user)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'No user found',
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
            // Validate the incoming request
            $request->validate([
                'username' => 'required|string|unique:tbl_users,username,' . $id . ',user_id',
                'name' => 'required|string',
                'email' => 'required|email|unique:tbl_users,email,' . $id . ',user_id',
                'password' => 'nullable|string|min:8', // Make password optional
                'role_id' => 'required|integer|exists:tbl_roles,role_id'
            ]);

            $user = UserModel::findOrFail($id);

            if ($request->has('password')) {
                $user->password = bcrypt($request->password);
            }

            $user->update($request->only(['username', 'name', 'email', 'role_id']));

            if ($request->has('password')) {
                return response()->json([
                    'message' => 'User password updated successfully.',
                    'data' => new UserResource($user->load('role'))
                ], 200);
            }

            return response()->json([
                'message' => 'User details updated successfully.',
                'data' => new UserResource($user->load('role'))
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An unexpected error occurred.',
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
            $user = UserModel::findOrFail($id);
            $user->delete();
            return response()->json([
                'message' => 'User deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'No user found',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

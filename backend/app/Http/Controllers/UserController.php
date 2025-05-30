<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Exception;
use App\Helpers\UserHelper;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = UserModel::with('role')->get();
            return response()->json([
                'success' => true,
                'message' => 'Users retrieved successfully',
                'total' => $users->count(),
                'data' => UserResource::collection($users)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error retrieving users',
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
                'username' => 'required|string|unique:tbl_users,username',
                'name' => 'required|string',
                'email' => 'required|email|unique:tbl_users,email',
                'password' => 'required|string|min:8',
                'role_id' => 'required|integer|exists:tbl_roles,role_id'
            ]);

            $data = $request->all();
            $data['user_id'] = UserHelper::generateCustomUserId();
            $data['password'] = bcrypt($data['password']);

            $user = UserModel::create($data);

            return response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => new UserResource($user->load('role'))
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating user',
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
                'success' => true,
                'message' => 'User retrieved successfully',
                'data' => new UserResource($user)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
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
            $request->validate([
                'username' => 'required|string|unique:tbl_users,username,' . $id . ',user_id',
                'name' => 'required|string',
                'email' => 'required|email|unique:tbl_users,email,' . $id . ',user_id',
                'password' => 'nullable|string|min:8',
                'role_id' => 'required|integer|exists:tbl_roles,role_id'
            ]);

            $user = UserModel::findOrFail($id);

            if ($request->has('password')) {
                $user->password = bcrypt($request->password);
            }

            $user->update($request->only(['username', 'name', 'email', 'role_id']));

            if ($request->has('password')) {
                return response()->json([
                    'success' => true,
                    'message' => 'User updated details and password successfully',
                    'data' => new UserResource($user->load('role'))
                ], 200);
            }

            return response()->json([
                'success' => true,
                'message' => 'User details updated successfully',
                'data' => new UserResource($user->load('role'))
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred upon updating user',
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
                'success' => true,
                'message' => 'User deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'No user found',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

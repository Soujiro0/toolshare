<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $auth;

    public function __construct(AuthService $auth)
    {
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        try {
            $validated = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            $user = DB::table('tbl_users')
                ->join('tbl_roles', 'tbl_users.role_id', '=', 'tbl_roles.role_id')
                ->select('tbl_users.*', 'tbl_roles.role_name')
                ->where('username', $validated['username'])
                ->first();

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not found.'
                ], 404);
            }

            if (!Hash::check($validated['password'], $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Incorrect password.'
                ], 401);
            }

            $token = $this->auth->generateToken($user->user_id, $user->name, $user->role_name);

            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
                'token' => $token,
                'user' => [
                    'user_id' => $user->user_id,
                    'name' => $user->name,
                    'role' => $user->role_name,
                ]
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong during login.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

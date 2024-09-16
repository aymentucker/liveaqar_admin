<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersController extends Controller
{

    /**
     * Register a new regular user.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255|unique:users',
            'phone' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Get the validated data
        $data = $validator->validated();

        // Set 'whatsapp' to be the same as 'phone'
        $data['whatsapp'] = $data['phone'];

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'whatsapp' => $data['whatsapp'], // This will be the same as 'phone'
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        // Generate a username if not provided
        if (!$user->username) {
            $user->username = Str::slug($user->name) . $user->id;
            $user->save();
        }

        // Create an authentication token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user->makeHidden(['password', 'remember_token'])->toArray(),
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }


    /**
     * Authenticate a user and return the token if the provided credentials are correct.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Check if a user with the specified email exists
        $user = User::where('email', $request->email)->first();

        // Check if user exists and password is correct
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.',
            ], 401);
        }

        // Generate a new token for the user
        $token = $user->createToken('auth_token')->plainTextToken;

        // Prepare the user data including the img_profile
        $userData = $user->toArray();

        return response()->json([
            'message' => 'User logged in successfully',
            'user' => $userData,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }


    /**
     * logout a User.
     */
    public function logoutUser(Request $request)
    {
        // Revoke the token that was used to authenticate the current request...
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'User logged out successfully'], 200);
    }


    /**
     * Delete a user account.
     */
    public function deleteUser(Request $request, $id)
    {
        $currentUser = Auth::user();

        if (!$currentUser) {
            return response()->json(['message' => 'Authentication required'], 401);
        }

        $user = User::findOrFail($id);

        if ($currentUser->id !== $user->id && $currentUser->role !== 'admin') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        try {
            // Revoke all tokens associated with the user
            $user->tokens()->delete();

            // Delete the user
            $user->delete();

            return response()->json(['message' => 'User account deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete user account.', 'error' => $e->getMessage()], 500);
        }
    }

}

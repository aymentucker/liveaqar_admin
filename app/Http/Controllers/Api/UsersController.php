<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'nullable|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'username' => 'sometimes|required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        if ($request->has('password')) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return response()->json(null, 204);
    }




    /**
     * Register a new regular user.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            // Add other fields as necessary
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'user_type' => 'user',
            'password' => Hash::make($request->password),
            'status' => 'Active',
            // Add other fields as necessary
        ]);

        // Update the username to include the user ID for uniqueness
        $user->username = $user->username . $user->id;
        $user->save();

        // Automatically log in the user upon registration
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user->toArray(), // Ensure this contains 'id'
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

        // Load the user's profile to get the img_profile
        $user->load('userProfile');

        // Generate a new token for the user
        $token = $user->createToken('auth_token')->plainTextToken;

        // Prepare the user data including the img_profile
        $userData = $user->toArray();
        $userData['img_profile'] = $user->userProfile ? $user->userProfile->img_profile : null; // Add the img_profile to the user data

        return response()->json([
            'message' => 'User logged in successfully',
            'user' => $userData, // Modified to include 'img_profile'
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


    public function deleteUser($id)
    {
        // Authenticate the user. Ensure this endpoint is protected by middleware.
        $currentUserId = Auth::id();
        $currentUser = User::find($currentUserId);

        if (!$currentUser) {
            return response()->json(['message' => 'Authentication required'], 401);
        }



        // Find the user by id
        $user = User::findOrFail($id);

        // Delete the user
        try {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully.'], 200);
        } catch (\Exception $e) {
            // Handle any exceptions, such as database errors
            return response()->json(['message' => 'Failed to delete user', 'error' => $e->getMessage()], 500);
        }
    }

}

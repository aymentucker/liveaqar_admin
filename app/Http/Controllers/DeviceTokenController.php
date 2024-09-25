<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceToken;

class DeviceTokenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'device_token' => 'required|string|unique:device_tokens',
            'user_id' => 'nullable|exists:users,id',
        ]);

        DeviceToken::create([
            'user_id' => $request->user_id,
            'device_token' => $request->device_token,
        ]);

        return response()->json(['message' => 'Device token stored successfully'], 200);
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceToken;

class DeviceTokenController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'device_token' => 'required|string|max:255',
        ]);

        $data['user_id'] = $request->user()->id ?? null;

        DeviceToken::updateOrCreate(
            ['device_token' => $data['device_token']],
            $data
        );

        return response()->json(['message' => 'Device token stored successfully.']);
    }
}

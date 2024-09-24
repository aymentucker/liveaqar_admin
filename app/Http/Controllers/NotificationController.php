<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification; // Assuming you have a Notification model

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->paginate(10); // Adjust pagination as needed
        return view('notifications.index', compact('notifications'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('notifications', 'public');
        }

        Notification::create($data);

        return redirect()->route('notifications.index')->with('success', 'Notification created successfully.');
    }

    public function update(Request $request, Notification $notification)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($notification->image_url && \Storage::disk('public')->exists($notification->image_url)) {
                \Storage::disk('public')->delete($notification->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('notifications', 'public');
        }

        $notification->update($data);

        return redirect()->route('notifications.index')->with('success', 'Notification updated successfully.');
    }

    public function destroy(Notification $notification)
    {
        // Delete image if exists
        if ($notification->image_url && \Storage::disk('public')->exists($notification->image_url)) {
            \Storage::disk('public')->delete($notification->image_url);
        }
        $notification->delete();

        return redirect()->route('notifications.index')->with('success', 'Notification deleted successfully.');
    }
}

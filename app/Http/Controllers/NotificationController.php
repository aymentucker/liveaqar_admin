<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\DeviceToken;
use App\Services\FirebaseService;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->paginate(10); // Adjust pagination as needed
        return view('notifications.index', compact('notifications'));
    }

    public function store(Request $request, FirebaseService $firebaseService)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        // Fetch all device tokens
        $deviceTokens = DeviceToken::pluck('device_token')->toArray();

        // Prepare notification data
        $notificationData = [
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $data['image_url'] ? asset('storage/' . $data['image_url']) : null,
            'click_action' => 'FLUTTER_NOTIFICATION_CLICK', // For handling click actions in Flutter
        ];


        // Handle image upload
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('notifications', 'public');
        }

          // Add the authenticated user's ID to the data
          $data['user_id'] = $request->user()->id;


        Notification::create($data);
        // Send notification
        $firebaseService->sendNotification($deviceTokens, $notificationData);

        return redirect()->route('notifications.index')->with('success', 'Notification created and sent successfully.');


        // return redirect()->route('notifications.index')->with('success', 'Notification created successfully.');
    }

    public function update(Request $request, Notification $notification, FirebaseService $firebaseService)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Fetch all device tokens
        $deviceTokens = DeviceToken::pluck('device_token')->toArray();

        // Prepare notification data
        $notificationData = [
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $data['image_url'] ? asset('storage/' . $data['image_url']) : null,
            'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
        ];


        // Handle image upload
        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($notification->image_url && \Storage::disk('public')->exists($notification->image_url)) {
                \Storage::disk('public')->delete($notification->image_url);
            }
            $data['image_url'] = $request->file('image_url')->store('notifications', 'public');
        }

        $notification->update($data);

        // Send notification
        $firebaseService->sendNotification($deviceTokens, $notificationData);

        return redirect()->route('notifications.index')->with('success', 'Notification updated and sent successfully.');


        // return redirect()->route('notifications.index')->with('success', 'Notification updated successfully.');
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

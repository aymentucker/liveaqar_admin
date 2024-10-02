<?php

namespace App\Services;

use GuzzleHttp\Client;

class FirebaseService
{
    protected $serverKey;

    public function __construct()
    {
        $this->serverKey = env('FIREBASE_SERVER_KEY');
    }

    public function sendNotification($deviceTokens, $notificationData, $dataPayload = [])
    {
        $client = new Client();

        $payload = [
            'registration_ids' => $deviceTokens,
            'notification' => $notificationData,
            'data' => $dataPayload,
        ];

        $response = $client->post('https://fcm.googleapis.com/fcm/send', [
            'headers' => [
                'Authorization' => 'key=' . $this->serverKey,
                'Content-Type' => 'application/json',
            ],
            'json' => $payload,
        ]);

        return $response->getBody()->getContents();
    }

}

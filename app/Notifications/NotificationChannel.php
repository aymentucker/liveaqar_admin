<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Fcm\FcmChannel;
use NotificationChannels\Fcm\FcmMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

abstract class NotificationChannel extends Notification
{
    public function via($notifiable)
    {
        return ['database', FcmChannel::class];
    }

    public function toFcm($notifiable)
    {
        return FcmMessage::create()
            ->setData($this->getData())
            ->setNotification(\NotificationChannels\Fcm\Resources\Notification::create()
                ->setTitle($this->getTitle())
                ->setBody($this->getBody())
                ->setImage($this->getImage())
            );
    }

    public function toArray($notifiable)
    {
        return [
            'title' => $this->getTitle(),
            'body' => $this->getBody(),
            'image' => $this->getImage(),
            'data' => $this->getData(),
        ];
    }

    abstract protected function getTitle(): string;
    abstract protected function getBody(): string;
    abstract protected function getImage(): ?string;
    abstract protected function getData(): array;
}

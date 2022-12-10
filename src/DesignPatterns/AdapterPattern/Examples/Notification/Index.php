<?php

namespace App\DesignPatterns\AdapterPattern\Examples\Notification;


class Index
{
    public function __construct(private Notification $notification)
    {
    }

    public function sendNotification(string $title, string $message)
    {
        return $this->notification->send($title, $message);
    }
}
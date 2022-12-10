<?php

namespace App\DesignPatterns\AdapterPattern\Examples\Notification;

interface Notification
{
    public function send(string $title, string $message): string;
}
<?php

namespace App\DesignPatterns\AdapterPattern\Examples\Notification;

class EmailNotification implements Notification
{
    public function __construct(protected string $adminEmail)
    {
    }

    public function send(string $title, string $message)
    {
        // mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}
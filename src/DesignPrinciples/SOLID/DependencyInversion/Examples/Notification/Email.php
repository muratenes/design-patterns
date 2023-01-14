<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\Notification;

class Email implements Notifiable
{

    public function notify(string $message)
    {
        // send email
    }
}
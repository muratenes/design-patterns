<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\Notification;

class SMS implements Notifiable
{

    public function notify(string $message)
    {
        // send sms to user
    }
}
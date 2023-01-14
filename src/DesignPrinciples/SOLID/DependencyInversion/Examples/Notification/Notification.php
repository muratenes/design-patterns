<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\Notification;

class Notification
{
    private array $notifications;

    public function __construct(array $notifications)
    {
        $this->notifications = $notifications;
    }

    /**
     * Her notification sınıfı için kendine özel methodlarını
     * kullanmak yerine,Notifiable interfaceden implement ettik
     * ve tek soyut method üzerinden bu işlemleri gerçekleştirdik.
     */
    public function notify(string $message)
    {
        foreach ($this->notifications as $notification) {
            $notification->notify($message);
        }
    }
}
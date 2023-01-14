<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\Notification;

/**
 *  Email,SMS ve gelebilecek diğer notification türleri için
 *  Notifiable interface'i tanımladık.
 *  Notification classında soyut nesneyi dependency ettik.
 */
interface Notifiable
{
    public function notify(string $message);
}
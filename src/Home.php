<?php

require __DIR__.'/../vendor/autoload.php';


use App\DesignPatterns\AdapterPattern\Examples\Notification\EmailNotification;

class Home
{
    public function __construct()
    {
        echo "qe234";
        $this->index();
    }

    public function index()
    {
        echo "asdasd";
        $notification = new EmailNotification("developers@example.com");

        $notification->send("example title","hello from content");
    }
}
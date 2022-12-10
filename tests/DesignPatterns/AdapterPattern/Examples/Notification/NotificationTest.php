<?php

namespace App\Tests\DesignPatterns\AdapterPattern\Examples\Notification;


use App\DesignPatterns\AdapterPattern\Examples\Notification\EmailNotification;
use App\DesignPatterns\AdapterPattern\Examples\Notification\Index;
use App\Tests\AbstractTestCase;

class NotificationTest extends AbstractTestCase
{
    public function testEmailNotification()
    {
        $title = $this->faker->title;
        $content = $this->faker->text(100);
        $email = $this->faker->email;

        $notification = new EmailNotification($email);
        $response = (new Index($notification))->sendNotification($title,$content);

        $this->assertEquals(
            "Sent email with title '$title' to '{$email}' that says '$content'.",
            $response
        );
    }
}
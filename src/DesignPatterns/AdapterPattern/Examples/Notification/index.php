<?php

$notification = new EmailNotification("developers@example.com");

echo $notification->send("example title","hello from content");

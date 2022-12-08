<?php

namespace App\DesignPatterns\AdapterPattern\Examples\Notification;

class SlackApi
{
    public function __construct(protected string $login, protected string $apiKey)
    {
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->login} with {$this->apiKey}'.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}
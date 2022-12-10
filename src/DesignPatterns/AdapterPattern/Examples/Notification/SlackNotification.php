<?php


use App\DesignPatterns\AdapterPattern\Examples\Notification\Notification;
use App\DesignPatterns\AdapterPattern\Examples\Notification\SlackApi;

class SlackNotification implements Notification
{
    public function __construct(protected SlackApi $slackApi, protected string $chatId)
    {
    }

    public function send(string $title, string $message) : string
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);

        $this->slackApi->logIn();
        $this->slackApi->sendMessage($this->chatId, $slackMessage);

        return $slackMessage;
    }
}
<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connectors;

use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connector;

class FacebookConnector implements Connector
{

    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function logIn(): Connector
    {
        $log = "facebook logged with " . $this->email . PHP_EOL;

        return $this;
    }

    public function post(string $content): Connector
    {
        $log =  "facebook post created with " . $content . PHP_EOL;

        return $this;
    }

    public function logOut(): Connector
    {
        $log =  "logout from facebook " . $this->email . PHP_EOL;

        return $this;
    }
}
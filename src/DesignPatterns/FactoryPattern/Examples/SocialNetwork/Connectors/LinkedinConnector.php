<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connectors;


use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connector;

class LinkedinConnector implements Connector
{

    public function logIn(): Connector
    {
        echo "linkedin logged" . PHP_EOL;

        return $this;
    }

    public function post(string $content): Connector
    {
        echo "linkedin post created with " . $content . PHP_EOL;

        return $this;
    }

    public function logOut(): Connector
    {
        echo "logout from linkedin.." . PHP_EOL;

        return $this;
    }
}
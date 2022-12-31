<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Clients;


use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connectors\FacebookConnector;
use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\SocialNetworkPoster;
use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connector;

class FacebookPoster extends SocialNetworkPoster
{

    private string $email;
    private string $password;

    public function  __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getConnection(): Connector
    {
        return new FacebookConnector($this->email, $this->password);
    }
}
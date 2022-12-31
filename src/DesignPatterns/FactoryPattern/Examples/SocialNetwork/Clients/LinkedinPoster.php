<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Clients;

use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connectors\LinkedinConnector;
use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\SocialNetworkPoster;
use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Connector;


class LinkedinPoster extends SocialNetworkPoster
{

    public function getConnection(): Connector
    {
        return new LinkedinConnector();
    }
}
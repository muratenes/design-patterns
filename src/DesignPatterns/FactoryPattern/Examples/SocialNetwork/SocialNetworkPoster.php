<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork;


abstract class SocialNetworkPoster
{

    public abstract function getConnection(): Connector;

    public function post(string $content)
    {
        $connection = $this->getConnection();

        $connection
            ->logIn()
            ->post($content)
            ->logOut();
    }
}
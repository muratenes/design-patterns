<?php

abstract class SocialNetworkPoster
{

    public abstract function getConnection(): Connector;

    public function post()
    {
        $connection = $this->getConnection();

        $connection
            ->logIn()
            ->post()
            ->logOut();
    }
}
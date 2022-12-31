<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork;

interface Connector
{
    public function logIn(): Connector;

    public function post(string $content): Connector;

    public function logOut(): Connector;
}
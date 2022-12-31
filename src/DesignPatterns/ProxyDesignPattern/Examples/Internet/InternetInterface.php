<?php

namespace App\DesignPatterns\ProxyDesignPattern\Examples\Internet;

interface InternetInterface
{
    public function connect(string $url);
}
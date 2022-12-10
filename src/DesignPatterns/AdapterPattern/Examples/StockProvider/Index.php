<?php

namespace App\DesignPatterns\AdapterPattern\Examples\StockProvider;

class Index
{
    public function __construct(private Client $client)
    {
    }

    public function fetch(Client $client)
    {
        return  $this->client->fetch();
    }
}
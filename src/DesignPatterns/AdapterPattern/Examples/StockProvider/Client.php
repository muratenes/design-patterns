<?php

namespace App\DesignPatterns\AdapterPattern\Examples\StockProvider;

interface Client
{
    public function fetch();
}
<?php

namespace App\Tests\DesignPatterns\AdapterPattern\Examples\Provider;

use App\DesignPatterns\AdapterPattern\Examples\StockProvider\AnyXmlProvider;
use App\DesignPatterns\AdapterPattern\Examples\StockProvider\SecondStockProvider;
use App\Tests\AbstractTestCase;

class ProviderTest extends AbstractTestCase
{

    public function testFetch()
    {
        $client = new SecondStockProvider(new AnyXmlProvider());
        $content = $client->fetch();
    }
}
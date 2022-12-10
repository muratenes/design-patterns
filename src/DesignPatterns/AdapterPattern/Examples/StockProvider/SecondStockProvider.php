<?php

namespace App\DesignPatterns\AdapterPattern\Examples\StockProvider;

/**
 * this stock provider response XML,it's needed to convert json
 */
class SecondStockProvider implements Client
{
    public function __construct(private AnyXmlProvider $anyXmlProvider)
    {
    }

    public function fetch()
    {
        $xml = simplexml_load_string($this->anyXmlProvider->getContent(), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        return $json;
    }
}
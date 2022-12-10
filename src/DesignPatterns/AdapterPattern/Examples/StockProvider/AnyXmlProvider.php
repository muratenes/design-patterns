<?php

namespace App\DesignPatterns\AdapterPattern\Examples\StockProvider;


class AnyXmlProvider
{
    private string $xmlContent = '
        <Products Version="1.0">
            <Product>
                 <title content="Red Shirt" />
                 <body content="Very small Red Shirt" />
                 <price min="500" max="1000" />
            </Product>
            <Product>
                 <title content="Green Shirt" />
                 <body content="Dark Green Shirt" />
                 <price min="300" max="900" />
            </Product>
        </Products>
';

    public function getContent(): string
    {
        return $this->xmlContent;
    }
}
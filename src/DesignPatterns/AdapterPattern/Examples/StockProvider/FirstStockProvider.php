<?php

namespace App\DesignPatterns\AdapterPattern\Examples\StockProvider;

class FirstStockProvider implements Client
{
    private array $products = [
        [
            'title' => "example product",
            'body' => "lorem ipsum sit dolor axios",
            'price' => [
                'min' => 140,
                'max' => 500,
            ]
        ],
        [
            'title' => "example product 2",
            'body' => "product slars robde dias",
            'price' => [
                'min' => 120,
                'max' => 500,
            ]
        ],
    ];

    public function fetch()
    {
        return json_encode($this->products);
    }
}
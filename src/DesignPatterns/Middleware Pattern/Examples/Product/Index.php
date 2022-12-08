<?php


class Index
{
    public $products = [];

    public function __construct()
    {
        $this->generateProducts();
    }


    public function index()
    {
        foreach ($this->products as $index => $product) {
            $this->products[$index] = (new MiddlewareResolver())->resolve($product);
        }
        print_r($this->products);
    }


    public function generateProducts()
    {
        $this->products = [
            (new Product())->setImage(null)
                ->setTitle('deneme 1')
                ->setStatus(true)
                ->setStock(124)
                ->setPrice(100),
            (new Product())->setImage('deneme2.jpg')
                ->setTitle('deneme 2')
                ->setStatus(true)
                ->setPrice(300)
                ->setStock(0),
            (new Product())->setImage('deneme3.jpg')
                ->setTitle('deneme 3')
                ->setStatus(true)
                ->setPrice(0)
                ->setStock(125),

        ];
    }
}
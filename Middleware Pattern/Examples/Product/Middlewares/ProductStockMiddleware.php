<?php

class ProductStockMiddleware implements ProductMiddlewareContract
{

    public static function create()
    {
        return function (Product $product) {
            if ($product->getStock() == 0) {
                return $product->setStatus(false);
            }
            return $product;
        };
    }
}
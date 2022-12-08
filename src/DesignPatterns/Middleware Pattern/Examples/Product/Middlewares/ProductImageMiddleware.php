<?php

class ProductImageMiddleware implements ProductMiddlewareContract
{

    public static function create()
    {
        return function (Product $product) {
            if (!$product->getImage()) {
                return $product->setImage('default-image.jpg');
            }
            return $product;
        };
    }
}
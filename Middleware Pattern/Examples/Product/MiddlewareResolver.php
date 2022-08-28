<?php

class MiddlewareResolver
{
    protected $middlewareStack = [];

    public function __construct()
    {
        $this->addMiddleware(ProductImageMiddleware::create());
    }


    /**
     * @return float
     *
     */
    public function resolve(Product $product) : Product
    {
        foreach ($this->getMiddlewareStack() as $middleware) {
            $product = $middleware($product);
        }

        return $product;
    }


    /**
     * @param $stack
     *
     */
    public function addMiddleware(callable $stack)
    {
        $this->middlewareStack[] = $stack;

        return $this;
    }

    /**
     * @return array
     */
    public function getMiddlewareStack()
    {
        return $this->middlewareStack;
    }
}
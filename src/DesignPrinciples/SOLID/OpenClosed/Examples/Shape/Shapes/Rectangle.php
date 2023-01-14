<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shape\Shapes;


use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shape\ShapeInterface;

class Rectangle implements ShapeInterface
{
    public function __construct(private float $height, private float $length)
    {

    }

    public function getArea(): float
    {
        return $this->height * $this->length;
    }
}
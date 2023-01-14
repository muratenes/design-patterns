<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shape\Shapes;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Shape\ShapeInterface;

class Circle implements ShapeInterface
{

    public function __construct(private float $radius)
    {
    }

    public function getArea(): float
    {
       return $this->radius * $this->radius * pi();
    }
}
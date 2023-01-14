<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Shape;

class AreaCalculator
{
    public function calculateArea(array $shapes): float
    {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->getArea();
        }

        return $area;
    }
}
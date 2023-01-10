<?php

namespace App\DesignPrinciples\SOLID\SingleResponsibility\Examples\AreaCalculator;

/**
 * For circles, you will need to know the radius
 */
class Circle
{
    public $radius;

    public function construct($radius)
    {
        $this->radius = $radius;
    }
}
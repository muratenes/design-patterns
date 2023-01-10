<?php

namespace App\DesignPrinciples\SOLID\SingleResponsibility\Examples\AreaCalculator;

/**
 * Next, create the AreaCalculator class and then write up the logic to sum up the areas of all provided shapes.
 * The area of a square is calculated by length squared. The area of a circle is calculated by pi times radius squared
 */
class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }

        return array_sum($area);
    }

    public function output()
    {
        return implode('', [
            '',
            'Sum of the areas of provided shapes: ',
            $this->sum(),
            '',
        ]);
    }
}
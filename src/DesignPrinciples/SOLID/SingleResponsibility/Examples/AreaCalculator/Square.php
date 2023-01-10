<?php

namespace App\DesignPrinciples\SOLID\SingleResponsibility\Examples\AreaCalculator;

/**
 * For squares, you will need to know the length of a side:
 */
class Square
{
    public $length;

    public function construct($length)
    {
        $this->length = $length;
    }
}
<?php

namespace App\DesignPrinciples\SOLID\SingleResponsibility\Examples\AreaCalculator;

/**
 * To address this, you can create a separate SumCalculatorOutputter
 * class and use that new class to handle the logic you need to output the data to the user:
 */
class SumCalculatorOutput
{
    protected $calculator;

    public function __constructor(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = [
            'sum' => $this->calculator->sum(),
        ];

        return json_encode($data);
    }

    public function HTML()
    {
        return implode('', [
            '',
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
            '',
        ]);
    }
}

## The SumCalculatorOutput class would work like this:

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutput($areas);

echo $output->JSON();
echo $output->HTML();

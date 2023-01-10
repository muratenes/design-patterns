<?php

namespace App\DesignPrinciples\SOLID\SingleResponsibility\Examples\AreaCalculator;

# Source : https://www.digitalocean.com/community/conceptual-articles/s-o-l-i-d-the-first-five-principles-of-object-oriented-design

/**
 * To use the AreaCalculator class, you will need to instantiate the class
 * and pass in an array of shapes and display the output at the bottom of the page.
 *
 * Here is an example with a collection of three shapes:
 *   > a circle with a radius of 2
 *   > a square with a length of 5
 *   > a second square with a length of 6
 */
$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);

echo $areas->output();

/**
 * The problem with the output method is that the AreaCalculator handles the logic to output the data.
 *
 * Consider a scenario where the output should be converted to another format like JSON.
 *
 * All of the logic would be handled by the AreaCalculator class.
 * This would violate the single-responsibility principle.
 * The AreaCalculator class should only be concerned with the
 * sum of the areas of provided shapes.
 * It should not care whether the user wants JSON or HTML.
 */
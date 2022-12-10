<?php

namespace App\Tests;


use Faker\Factory;
use Faker\Generator;

abstract class AbstractTestCase extends \PHPUnit\Framework\TestCase
{
    protected Generator $faker;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        $this->faker =  Factory::create();
        parent::__construct($name, $data, $dataName);
    }
}
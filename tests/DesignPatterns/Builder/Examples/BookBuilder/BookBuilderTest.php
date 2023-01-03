<?php

namespace App\Tests\DesignPatterns\Builder\Examples\BookBuilder;

use App\DesignPatterns\BuilderPattern\Examples\BookBuilder\Director;
use App\Tests\AbstractTestCase;

class BookBuilderTest extends AbstractTestCase
{
    public function testVirtualBook()
    {
        $virtual = (new Director())->createVirtualBook();

        $this->assertEquals('virtual', $virtual->getType());
    }

    public function testPhysicalBook()
    {
        $virtual = (new Director())->createPhysicalBook();

        $this->assertEquals('physical', $virtual->getType());
    }
}
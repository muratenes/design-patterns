<?php

namespace App\DesignPatterns\BuilderPattern\Examples\BookBuilder;

class Index
{
    public function index()
    {
        $virtualBook = (new Director())->createVirtualBook();
        $physicalBook = (new Director())->createPhysicalBook();
    }
}
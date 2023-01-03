<?php

namespace App\DesignPatterns\BuilderPattern\Examples\BookBuilder;

class Director
{
    public function createVirtualBook(): Book
    {
        return (new Builder())
            ->setType("virtual")
            ->setFontSize(30)
            ->setIsShareable(true)
            ->build();
    }

    public function createPhysicalBook(): Book
    {
        return (new Builder())
            ->setType("physical")
            ->setFontSize(15)
            ->setIsShareable(false)
            ->build();
    }
}
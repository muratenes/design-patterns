<?php

namespace App\DesignPatterns\BuilderPattern\Examples\BookBuilder;

interface BuilderInterface
{
    /**
     * @param string $type in:virtual,physical
     * @return mixed
     */
    public function setType(string $type): Builder;

    public function setPage(int $page): Builder;

    public function setFontSize(int $size): Builder;

    public function setIsShareable(bool $isShared): Builder;

    public function build(): Book;
}
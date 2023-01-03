<?php

namespace App\DesignPatterns\BuilderPattern\Examples\BookBuilder;

class Builder implements BuilderInterface
{
    private Book $book;

    public function __construct()
    {
        $this->book = new Book();
    }

    public function setType(string $type): Builder
    {
        $this->book->setType($type);

        return $this;
    }

    public function setPage(int $page): Builder
    {
        $this->book->setPage($page);

        return $this;
    }

    public function setFontSize(int $size): Builder
    {
        $this->book->setFontSie($size);

        return $this;
    }

    public function setIsShareable(bool $isShared): Builder
    {
        $this->book->setIsShared($isShared);

        return $this;
    }

    public function build(): Book
    {
        return $this->book;
    }
}
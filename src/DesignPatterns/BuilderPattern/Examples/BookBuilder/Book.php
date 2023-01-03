<?php

namespace App\DesignPatterns\BuilderPattern\Examples\BookBuilder;

class Book
{
    private string $type;
    private int $page;
    private int $fontSie;
    private bool $isShared;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Book
     */
    public function setType(string $type): Book
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return Book
     */
    public function setPage(int $page): Book
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int
     */
    public function getFontSie(): int
    {
        return $this->fontSie;
    }

    /**
     * @param int $fontSie
     * @return Book
     */
    public function setFontSie(int $fontSie): Book
    {
        $this->fontSie = $fontSie;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShared(): bool
    {
        return $this->isShared;
    }

    /**
     * @param bool $isShared
     * @return Book
     */
    public function setIsShared(bool $isShared): Book
    {
        $this->isShared = $isShared;
        return $this;
    }


}
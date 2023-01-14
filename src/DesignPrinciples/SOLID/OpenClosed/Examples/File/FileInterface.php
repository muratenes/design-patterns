<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\File;

interface FileInterface
{
    public function readFile(string $filename);

    public function saveFile(string $fileName, array $content);
}
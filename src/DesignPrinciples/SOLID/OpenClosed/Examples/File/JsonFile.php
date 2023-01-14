<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\File;

class JsonFile implements FileInterface
{

    public function readFile(string $filename)
    {
        $content = file_get_contents($filename);

        return json_encode($content);
    }

    public function saveFile(string $fileName, array $content)
    {
        $content = json_encode($content);
        file_put_contents($fileName, $content);
    }
}
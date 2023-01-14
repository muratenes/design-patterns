<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\File;

class File
{
    public function saveFile(string $fileName, array $content, string $type)
    {
        if ($type == 'json') {
            $content = json_encode($content);
            file_put_contents($fileName, $content);
        } elseif ($type == 'xml') {
            // content convert to xml
            file_put_contents($fileName, $content);
        }
    }

    public function readFile(string $filename, string $type)
    {
        if ($type == 'json') {
            $content = file_get_contents($filename);
            return json_encode($content);
        } elseif ($type == 'xml') {
            $content = file_get_contents($filename);
            // convert to xml logic
            return $content;
        }
    }

}
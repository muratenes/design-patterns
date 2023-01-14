<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\File;

class Index
{
    public function index()
    {
        $jsonFile = new JsonFile();
        $jsonFile->saveFile('json-example.txt', [
            'title' => "Title of File",
            'content' => "example content"
        ]);
    }
}
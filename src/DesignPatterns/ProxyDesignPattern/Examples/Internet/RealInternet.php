<?php

namespace App\DesignPatterns\ProxyDesignPattern\Examples\Internet;

class RealInternet implements InternetInterface
{

    public function connect(string $url)
    {
        echo $url . '  Page loading...' . PHP_EOL;
        $content = file_get_contents($url);

        print_r($content . PHP_EOL);
    }
}
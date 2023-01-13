<?php

namespace App\DesignPatterns\SingletonPattern\Example\BaseSingleton;

class Config extends Singleton
{

    private $configs = [];

    public function getValue(string $key)
    {
        return $this->configs[$key];
    }

    public function setValue(string $key, $value)
    {
        $this->configs[$key] = $value;
    }
}
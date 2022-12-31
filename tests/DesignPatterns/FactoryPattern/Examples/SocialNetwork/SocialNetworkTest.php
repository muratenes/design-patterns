<?php

namespace App\Tests\DesignPatterns\FactoryPattern\Examples\SocialNetwork;

use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Clients\FacebookPoster;
use App\Tests\AbstractTestCase;

class SocialNetworkTest extends AbstractTestCase
{
    public function testPost()
    {
        $facebook = new FacebookPoster($this->faker->email, "11111111");
        $facebook->post("Example Content");
    }
}
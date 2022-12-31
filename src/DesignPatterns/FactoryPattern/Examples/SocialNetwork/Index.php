<?php

namespace App\DesignPatterns\FactoryPattern\Examples\SocialNetwork;


use App\DesignPatterns\FactoryPattern\Examples\SocialNetwork\Clients\FacebookPoster;

class Index
{
    public function post(SocialNetworkPoster $networkPoster, string $message)
    {
        $networkPoster->post($message);
    }
}


// Example USAGE
// $poster = new FacebookPoster($this->faker->email, "11111111");
// $poster->post("Example Content");
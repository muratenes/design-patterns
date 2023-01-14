<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia;

use App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia\Providers\Twitter;

class Index
{
    public function index()
    {
        $twitter = new Twitter();
        $twitter->addComment('Twitter comment');

        $publisher  =  new Publisher($twitter);
        $publisher->comments();
    }
}
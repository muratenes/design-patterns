<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia;

class Publisher
{
    private SocialMediaInterface $socialMedia;

    public function __construct(SocialMediaInterface $socialMedia)
    {
        $this->socialMedia = $socialMedia;
    }

    public function comments()
    {
        $this->socialMedia->getComments();
    }
}
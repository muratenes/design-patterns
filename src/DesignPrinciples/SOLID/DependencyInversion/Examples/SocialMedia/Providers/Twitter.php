<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia\Providers;

use App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia\SocialMediaInterface;

class Twitter implements SocialMediaInterface
{
    private array $comments;

    public function sharePost(string $title, string $summary)
    {
        // share post on twitter
    }

    public function addComment(string $comment)
    {
        $this->comments[] = $comment;
    }

    public function like(string $id)
    {
        // like to post
    }

    public function getComments()
    {
        return $this->comments;
    }
}
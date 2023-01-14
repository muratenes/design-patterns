<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia\Providers;

use App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia\SocialMediaInterface;

class Facebook implements SocialMediaInterface
{

    public function sharePost(string $title, string $summary)
    {
        // share post on facebook
    }

    public function addComment(string $comment)
    {
        // add comment to post
    }

    public function like(string $id)
    {
        // like post by id
    }

    public function getComments()
    {
        // TODO: Implement getComments() method.
    }
}
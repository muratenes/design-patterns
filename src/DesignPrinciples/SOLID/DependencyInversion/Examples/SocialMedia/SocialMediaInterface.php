<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\SocialMedia;

interface SocialMediaInterface
{
    public function sharePost(string $title, string $summary);

    public function addComment(string $comment);

    public function like(string $id);

    public function getComments();
}
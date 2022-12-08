<?php

interface Connector
{
    public function logIn(): self;

    public function post(string $content): self;

    public function logOut(): self;
}
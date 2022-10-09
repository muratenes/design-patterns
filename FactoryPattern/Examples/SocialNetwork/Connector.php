<?php

interface Connector
{
    public function logIn(): self;

    public function post(): self;

    public function logOut(): self;
}
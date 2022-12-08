<?php

interface BuilderInterface
{
    public function addHeaders(): self;

    public function addBody(): self;

    public function setUrl(): self;

    public function setMethod(): self;

    public function getClient(): Client;
}
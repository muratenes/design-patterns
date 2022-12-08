<?php

class Apiv5Builder extends ApiV4Builder implements BuilderInterface
{
    public function setUrl(): BuilderInterface
    {
        parent::getClient()->setUrl('api.example.com/v5/users');

        return $this;
    }

    public function setMethod(): BuilderInterface
    {
        parent::getClient()->setMethod('GET');

        return $this;
    }
}
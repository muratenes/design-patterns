<?php

class WebBuilder implements BuilderInterface
{
    private Client $client;


    public function __construct()
    {
        $this->client = new Client();
    }

    public function addHeaders(): BuilderInterface
    {
        $this->client
            ->addHeader('TOKEN ', 'WEB-TOKEN')
            ->addHeader('Accept', 'application/html')
            ->addHeader('Accept-Charset', 'utf-8');

        return $this;
    }

    public function addBody(): BuilderInterface
    {
        $this->client
            ->setBody([
                'active' => true,
                'createdAt' => (new DateTime())->format('Y-m-d'),
                'limit' => 40
            ]);

        return $this;
    }

    public function setUrl(): BuilderInterface
    {
        $this->client
            ->setUrl('example.com/users');

        return $this;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setMethod(): BuilderInterface
    {
        $this->client->setMethod('GET');

        return $this;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
<?php

class ApiV4Builder implements BuilderInterface
{
    private Client $client;


    public function __construct()
    {
        $this->client = new Client();
    }

    public function addHeaders(): BuilderInterface
    {
        $this->client
            ->addHeader('Bearer ', 'Bh1231241249809ad')
            ->addHeader('Accept', 'application/json')
            ->addHeader('Accept-Charset', 'utf-8');

        return $this;
    }

    public function addBody(): BuilderInterface
    {
        $this->client
            ->setBody([
                'isActive' => true,
                'publishedAt' => (new DateTime())->format('Y-m-d'),
                'limit' => 100
            ]);

        return $this;
    }

    public function setUrl(): BuilderInterface
    {
        $this->client
            ->setUrl('api.example.com/v4/users');

        return $this;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setMethod(): BuilderInterface
    {
        $this->client->setMethod('POST');

        return $this;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
<?php

class Client
{
    public array $headers;

    public $body;

    public string $method;

    public string $url;

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }


    /**
     * @param mixed $headers
     */
    public function addHeader(string $key, string $value): self
    {
        $this->headers[] = "$key $value";

        return $this;
    }


    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): self
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): self
    {
        $this->url = $url;

        return $this;
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function __serialize(): array
    {
        return [
            'headers' => $this->getHeaders(),
            'body' => $this->getBody(),
            'url' => $this->getUrl(),
            'method' => $this->getMethod()
        ];
    }
}
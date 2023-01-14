<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report;

class Report implements ReportInterface
{
    public function __construct(
        private string $title,
        private string $date,
        private array  $headers,
        private array  $body,
    )
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): array
    {
        return $this->body;
    }
}
<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report;

interface ReportInterface
{
    public function getTitle(): string;

    public function getDate(): string;

    public function getHeaders(): array;

    public function getBody(): array;
}
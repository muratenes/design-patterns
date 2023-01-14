<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Formatter\JsonFormatter;
use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Formatter\XmlFormatter;

class Index
{
    public function index()
    {
        $report = new Report(
            'report Title',
            '2022-12-11',
            ['accept' => 'xml'],
            [
                'startDate' => date('Y-m-d'),
                'days' => 30,
                'page' => 12
            ]
        );

        return (new JsonFormatter())->format($report);
    }
}
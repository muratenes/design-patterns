<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Formatter;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Report;
use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\ReportFormatter;

class JsonFormatter implements ReportFormatter
{

    public function format(Report $report): string
    {
        return json_encode($report->getBody());
    }
}
<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report;

interface ReportFormatter
{
    public function format(Report $report): string;
}
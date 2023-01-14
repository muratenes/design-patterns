<?php

namespace App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Formatter;

use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\Report;
use App\DesignPrinciples\SOLID\OpenClosed\Examples\Report\ReportFormatter;

class XmlFormatter implements ReportFormatter
{

    public function format(Report $report): string
    {
        $content = $report->getBody();
        // content convert to xml
        $convertedXMl = 'xml';

        return $convertedXMl;
    }
}
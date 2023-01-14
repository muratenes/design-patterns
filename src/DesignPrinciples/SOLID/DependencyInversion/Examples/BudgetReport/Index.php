<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\BudgetReport;

class Index
{
    public function index()
    {
        // Client
        $mysql = new MysqlDB();
        $report_mysql = new BudgetReport($mysql);

        $report_mysql->open();

        $mongo = new MongoDB();
        $report_mongo = new BudgetReport($mongo);

        $report_mongo->open();
    }
}
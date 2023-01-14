<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\BudgetReport;

class BudgetReport
{
    private DatabaseInterface $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function open()
    {
        $this->database->get(1);
    }

    public function save()
    {
        $this->database->create([
            'created_at' => date('Y-m-d')
        ]);
    }
}
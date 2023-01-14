<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\BudgetReport;

interface DatabaseInterface
{
    public function get(int $id);

    public function select();

    public function update(int $id, array $data);

    public function create(array $data);

    public function delete(int $id);

}
<?php

namespace App\DesignPrinciples\SOLID\DependencyInversion\Examples\BudgetReport;

class MysqlDB implements DatabaseInterface
{

    public function get(int $id)
    {
        // TODO: Implement get() method.
    }

    public function select()
    {
        // TODO: Implement select() method.
    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
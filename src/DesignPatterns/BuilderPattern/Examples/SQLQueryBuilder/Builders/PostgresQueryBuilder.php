<?php

namespace App\DesignPatterns\BuilderPattern\Examples\SQLQueryBuilder\Builders;

use App\DesignPatterns\BuilderPattern\Examples\SQLQueryBuilder\QueryBuilderInterface;

class PostgresQueryBuilder extends MysqlQueryBuilder implements QueryBuilderInterface
{
    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
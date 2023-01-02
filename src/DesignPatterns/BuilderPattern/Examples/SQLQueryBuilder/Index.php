<?php

namespace App\DesignPatterns\BuilderPattern\Examples\SQLQueryBuilder;

class Index
{

    /**
     * @param QueryBuilderInterface $queryBuilder
     * @return string
     */
    public function createQuery(QueryBuilderInterface $queryBuilder): string
    {
        return $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20)
            ->getSQL();
    }
}

// example usage
//createQuery(new MysqlQueryBuilder());

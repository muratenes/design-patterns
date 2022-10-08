<?php

require 'kernel.php';

function createQuery(QueryBuilderInterface $queryBuilder)
{
    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

    echo $query;
}

createQuery(new MysqlQueryBuilder());
echo PHP_EOL . "----" . PHP_EOL;
createQuery(new PostgresQueryBuilder());



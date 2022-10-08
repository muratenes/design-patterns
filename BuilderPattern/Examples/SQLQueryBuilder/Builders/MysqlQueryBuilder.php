<?php



class MysqlQueryBuilder implements QueryBuilderInterface
{
    protected $query;

    public function reset()
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, array $fields): QueryBuilderInterface
    {
        $this->reset();
        $this->query->base = "select " . implode(',', $fields) . " from $table";
        $this->query->type = 'select';

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): QueryBuilderInterface
    {
        if (!in_array($this->query->type, ['select', 'update', 'delete'])) {
            throw new \Exception("WHERE can only be added to SELECT,UPDATE,DELETE statements");
        }
        $this->query->where[] = "$field $operator $value";

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        if (!in_array($this->query->type, ['select'])) {
            throw new \Exception("LIMIT can only be added to SELECT");
        }
        $this->query->limit = " LIMIT $start,$offset";

        return $this;
    }

    public function getSql(): string
    {
        $query = $this->query;
        $sql = $this->query->base;

        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }
        if (!empty($this->query->limit)) {
            $sql .= $this->query->limit;
        }

        return $sql . ";";
    }
}
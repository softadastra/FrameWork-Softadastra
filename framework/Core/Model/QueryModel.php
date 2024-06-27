<?php

namespace Softadastra\Core\Model;

abstract class QueryModel extends BaseModel
{
    public function __construct($table)
    {
        $this->table = $table;
        parent::__construct();
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function removeById($id)
    {
        return $this->delete($id);
    }

    public function getOne(array $conditions)
    {
        return $this->findOne($conditions);
    }
}

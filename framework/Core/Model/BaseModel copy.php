<?php

namespace Softadastra\Core\Model;

use Softadastra\Configurations\Database;
use PDO;

abstract class BaseModel
{
    protected $table;
    protected $pdo;

    public function __construct()
    {
        if (empty($this->table)) {
            throw new \Exception("La propriété 'table' doit être définie dans la classe de modèle.");
        }
        $this->pdo = $this->initializeDatabase();
    }

    private function initializeDatabase()
    {
        $database = new Database(DB_NAME, DB_HOST, DB_USER, DB_PWD);
        return $database->getPdo();
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $entity = new EntityModel();
            $this->fillEntity($entity, $result);
            return $entity;
        }
        return null;
    }

    public function findAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM {$this->table}LIMIT 0,2");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map(function ($result) {
            $entity = new EntityModel();
            $this->fillEntity($entity, $result);
            return $entity;
        }, $results);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function findOne(array $conditions)
    {
        $query = "SELECT * FROM {$this->table} WHERE ";
        $params = [];
        foreach ($conditions as $column => $value) {
            $query .= "$column = :$column AND ";
            $params[$column] = $value;
        }
        $query = rtrim($query, "AND ");

        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $entity = new EntityModel();
            $this->fillEntity($entity, $result);
            return $entity;
        }
        return null;
    }

    public function customQuery($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map(function ($result) {
            $entity = new EntityModel();
            $this->fillEntity($entity, $result);
            return $entity;
        }, $results);
    }

    protected function fillEntity($entity, $data)
    {
        foreach ($data as $property => $value) {
            $setter = 'set' . ucfirst($property);
            if (method_exists($entity, $setter)) {
                $entity->$setter($value);
            }
        }
    }
}

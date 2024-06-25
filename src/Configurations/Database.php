<?php

namespace Softadastra\Configurations;

use PDO;

class Database
{
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbname, string $host, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO("mysql:dbname={$this->dbname};host={$this->host}", $this->username, $this->password);
        }
        return $this->pdo;
    }
}

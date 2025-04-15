<?php

namespace System\App\Models;

use PDO;
use System\App\Core\Database;

class User
{
    private $pdo;

    public function __construct()
    {
        $db = new Database();
        $db->connect();

        $this->pdo = $db->getPDO();
    }

    public function getByName(string $name)
    {
        $sql = "SELECT name, password FROM users WHERE name = '$name'";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

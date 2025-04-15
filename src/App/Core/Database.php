<?php

namespace System\App\Core;

use PDO;
use PDOException;

class Database
{
    private $pdo;

    public function connect()
    {
        $config = require '../src/config/database.php';

        try {
            $dsn = "mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'] . ";charset=" . $config['db_charset'];
            $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            die("An error occurred. Please try again later.");
        }

        return $this->pdo;
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}

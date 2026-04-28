<?php
namespace App\Config;

use PDO;
use PDOException;

// Valeria Salas Felix 3-03

class Database {
    private $host = "localhost";
    private $dbname = "productos";
    private $username = "root";
    private $password = "root";
    private $connection;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // En buenas prácticas no se usa echo, se lanza la excepción
            throw new PDOException("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}



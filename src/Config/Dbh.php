<?php

namespace App\Config;

use PDO;
use PDOException;

class Dbh{
    private $host = "localhost";
    private $dbname = "careerlink1";
    private $username = "root";
    private $password = "";
    private $conn;

    public function connection()
    {
        try {
            $this->conn = new PDO("mysql:host =" . $this->host . ";dbname:" . $this->dbname, $this->username , $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connection valide";
        } catch (PDOException $exeption) {
            echo "Connection error: " . $exeption->getMessage();
        }
        return $this->conn;
    }
}

$dbcnnect = new Dbh();
$dbcnnect->connection();

?>
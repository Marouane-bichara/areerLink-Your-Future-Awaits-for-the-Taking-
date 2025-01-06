<?php
namespace App\Models;
use App\Config\Dbh;
use PDO;

    class getCategoryModel{

        private $conn;

        public function __construct() {
            $db = new Dbh();
            $this->conn = $db->connection();    
        }
       
        public function getcategoriesmodal()
        {
            $query = "SELECT * from category";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $row =  $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }
    }
?>
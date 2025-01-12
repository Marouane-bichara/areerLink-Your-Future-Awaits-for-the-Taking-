<?php
namespace App\Models;

use App\Config\Dbh;

class CreatetagsModel{

    private $conn;

    public function __construct() {
        $db = new   Dbh();
        $this->conn = $db->connection();    
    }


    public function setTags($name)
    {
        $query = "INSERT INTO tags (`name`) VALUES (:name);";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->execute();
        header("Location: ./index.php");
    }
}
?>
<?php

namespace App\Models;

use App\Config\Dbh;
use PDO;

class EditProfileRecuiterModal{
    private $conn;

    public function __construct() {
        $db = new Dbh();
        $this->conn = $db->connection();    
    }

    public function editTheUser($userName, $userEmail, $userPhone, $userLocation)
    {

        session_start();
        $userId = $_SESSION["idRecruiter"];
        
        $query = "UPDATE users 
                  SET user_name = :user_name, email = :email, Phone_Number = :Phone_Number, location = :location
                  WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        // Bind parameters with appropriate data types
        $stmt->bindParam(":user_name", $userName, PDO::PARAM_STR);
        $stmt->bindParam(":email", $userEmail, PDO::PARAM_STR);
        $stmt->bindParam(":Phone_Number", $userPhone, PDO::PARAM_STR);
        $stmt->bindParam(":location", $userLocation, PDO::PARAM_STR);
        $stmt->bindParam(":id", $userId, PDO::PARAM_INT);
        
        $stmt->execute();
        header("Location: ./profileRecruiter.php");
    }
}

?>
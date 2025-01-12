<?php

namespace App\Models;

use App\Classes\Role\Role;
use App\Classes\User\User;
use App\Config\Dbh;
use PDO;

class UserModel{
    private $conn; 

    public function __construct() {
            $db = new Dbh();
            $this->conn = $db->connection();
    }

    public function findUserByEmailAndPassword($email, $password){
        session_start();

        $query = "SELECT users.id , users.email , users.password , role.id as role_id , role.role_name as `role`
        FROM users join role on role.id = users.role where users.email = :email";  
   
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         if(!$row){
         return null;
         }
         if (!password_verify($password, $row['password'])) {
            return null;
        }
         else{
            // session_start();
            if($row["role"] == "admin")
            {
                $_SESSION["nameAdmin"] = $row["role"];
                $_SESSION["idAdmin"] = $row["id"];
            }
            if($row["role"] == "recruiter")
            {
                $_SESSION["nameRecruiter"] = $row["role"];
                $_SESSION["idRecruiter"] = $row["id"];
            }


            $role = new Role($row["role_id"], $row["role"]);
            return new User($row['id'],$row["email"],$role,$row["password"]);
         }
    }
}
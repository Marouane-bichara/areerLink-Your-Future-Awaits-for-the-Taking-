<?php 

namespace App\Models;

use App\Config\Dbh;
use PDO;

class RegisterModel {

    private $conn;

    public function __construct() {
        $db = new Dbh();
        $this->conn = $db->connection();    
    }

    public function registerUser($nameRegister, $emailRegister, $passwordRegister, $confirmpasswordRegister) {
        if (empty($nameRegister) || empty($emailRegister) || empty($passwordRegister) || empty($confirmpasswordRegister)) {
            return "emptyInputs";
        }
        if (!preg_match("/^[a-zA-Z- ]*$/", $nameRegister)) {
            return "InvalidName";
        }
        if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
            return "emailnotValid";
        }
        if ($passwordRegister !== $confirmpasswordRegister) {
            return "InvalidRepeatPassword";
        }
        return true;
    }

    public function registerTheUser($nameRegister, $emailRegister, $passwordRegister, $roleRegister) {
        $role = 0; // Default role
        if ($roleRegister === "admin") {
            $role = 1;
        } elseif ($roleRegister === "recruiter") {
            $role = 3;
        } elseif ($roleRegister === "candidate") {
            $role = 2;
        } else {
            return "InvalidRole";
        }

        $query = "INSERT INTO users (user_name, email, `password`, `role`)
                  VALUES (:user_name, :email, :password, :role);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":user_name", $nameRegister);
        $stmt->bindParam(":email", $emailRegister);
        $stmt->bindParam(":password", $passwordRegister);
        $stmt->bindParam(":role", $role, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return "UserRegisteredSuccessfully";
        } catch (\PDOException $e) {
            return "DatabaseError: " . $e->getMessage();
        }
    }
}

?>

<?php 

namespace App\Models;

use App\Config\Dbh;

class RegisterModel{

    private $conn;

    public function __construct(){
        $db = new Dbh();
        $this->conn = $db->connection();    
    }

    public function registerUser($nameRegister , $emailRegister , $passwordRegister , $confirmpasswordRegister){
 
        if(empty($nameregister) || empty($emailRegister) || empty($passwordRegister) || empty($confirmpasswordRegister)) {
            return "emptyInputs";
        }
        if (!preg_match("/^[a-zA-Z- ]*$/", $nameRegister)) {
            return "InvalidName";
        }
        if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL)) {
            return "emailnotValid";
        }
        if ($passwordRegister !== $confirmpasswordRegister) {
            return "InvalidRepeatPassowrd";
        }else{
            return True;
        }
    }

    public function registerTheUser($nameRegister , $emailRegister , $passwordRegister , $roleRegister)
    {
        if($roleRegister == "admin")
        {
            $query = "INSERT INTO users (user_name , email , `password` , `role`)
            values($nameRegister , $emailRegister , $passwordRegister , 1);
            ";
        }
        if($roleRegister == "recruiter")
        {
            $query = "INSERT INTO users (user_name , email , `password` , `role`)
            values($nameRegister , $emailRegister , $passwordRegister , 3);
            ";
        }
        if($roleRegister == "candidate")
        {
            $query = "INSERT INTO users (user_name , email , `password` , `role`)
            values($nameRegister , $emailRegister , $passwordRegister , 2);
            ";
        }
    }
}

?>
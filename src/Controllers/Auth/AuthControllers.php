<?php
    namespace App\Controllers\Auth;

use App\Models\UserModel;

    class AuthControllers{
        public function login($email,$password){
            $userModel = new UserModel;
            $user = $userModel->findUserByEmailAndPassword($email,$password);
            if($user == null){
                echo "user not found please check ...";    
            }
            else{
                if($user->getRole()->getTitle() == "admin")
                {
                    header("Location:../../Views/Admin/home.php");
                }
            }

        }
    }
?>
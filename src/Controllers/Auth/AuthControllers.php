<?php
    namespace App\Controllers\Auth;

use App\Models\UserModel;
use App\Classes\Role\Role;
use App\Classes\User\User;

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
                if($user->getRole()->getTitle() == "candidate")
                {

                    header("Location:../../Views/Candidate/home.php");
                }
                if($user->getRole()->getTitle() == "recruiter")
                {

                    header("Location:../../Views/Recruiter/home.php");
                }
            }

        }
    }
?> 
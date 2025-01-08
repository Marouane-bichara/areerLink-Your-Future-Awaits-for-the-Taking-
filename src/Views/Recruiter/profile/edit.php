<?php
require_once "../../../../vendor/autoload.php";

use App\Controllers\ProfileRecruiter\EditUserProfileController;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        if(isset($_POST["submit"]))
        {
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userPhone = $_POST["userPhone"];
            $userLocation = $_POST["userLocation"];

            $editUser = new EditUserProfileController();
            $editUser->editrecru($userName,$userEmail,$userPhone,$userLocation);

        }

        if(isset($_POST["submitEdit"]))
        {
            $webSite = $_POST["edit-Website"];
            $industry = $_POST["edit-industry"];
            $description = $_POST["edit-Description"];

            
        }
    }

?>
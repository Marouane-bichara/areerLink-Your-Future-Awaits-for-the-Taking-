<?php

use App\Controllers\ProfileRecruiter\AddMoreInfosController;

require_once "../../../../vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submitEdit"])) {
        $webSite = $_POST["edit-Website"];
        $industry = $_POST["edit-industry"];
        $description = $_POST["edit-Description"];

        $addTheInfos = new AddMoreInfosController();
        $message = $addTheInfos->AddNewInfosUser($webSite, $industry, $description);

        echo $message; 
    }
}


?>
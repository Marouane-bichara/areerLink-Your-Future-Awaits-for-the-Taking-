<?php

namespace App\Controllers\ProfileRecruiter;

use App\Models\AddMoreInfoModal;

class AddMoreInfosController {

    public function AddNewInfosUser($webSite, $industry, $description) {
        $insertMoreInfo = new AddMoreInfoModal();
        $userExists = $insertMoreInfo->checksUser();

        if ($userExists) {
            return "You can only edit the information. Adding new information is not allowed.";
        } else {
            $insertMoreInfo->AddNewInfos($webSite, $industry, $description);
            return "Information added successfully!";
        }
    }
}


?>
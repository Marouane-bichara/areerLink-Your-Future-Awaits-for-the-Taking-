<?php

namespace App\Controllers\ProfileRecruiter;

use App\Models\EditProfileRecuiterModal;

class EditUserProfileController{

    public function editrecru($userName, $userEmail, $userPhone, $userLocation)
    {
        $editTheuserinfo = new EditProfileRecuiterModal();
         $editTheuserinfo->editTheUser($userName, $userEmail, $userPhone, $userLocation);
    } 
  
}

?>
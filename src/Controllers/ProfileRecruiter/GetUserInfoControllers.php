<?php 
    namespace App\Controllers\ProfileRecruiter;

use App\Models\ProfileInfoUserModal;

    class GetUserInfoControllers{
        public function getinformationsController(){
            $getuser = new ProfileInfoUserModal();
            $resault = $getuser->getInfoFromDatabase();
            return $resault;
        }

        public function getDeatilsInofrmations()
        {
            $getuser = new ProfileInfoUserModal();
            $resault = $getuser->getUserMoreInfo();
            return $resault;
        }
    }
?>
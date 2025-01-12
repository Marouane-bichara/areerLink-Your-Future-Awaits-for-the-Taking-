<?php 
    namespace App\Models;

use App\Config\Dbh;
use PDO;

    class ProfileInfoUserModal{
        private $conn;

        public function __construct() {
            $db = new Dbh();
            $this->conn = $db->connection();    
        }


        public function getInfoFromDatabase()
        {
            $idUser = $_SESSION["idRecruiter"];
            $query = "SELECT user_name , email , Phone_Number , `location` from users where users.id = $idUser";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        public function getUserMoreInfo()
        {
            $idUser = $_SESSION["idRecruiter"];
            $query = "SELECT website , industry , description from detailinfos where id_recruiter = $idUser";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>
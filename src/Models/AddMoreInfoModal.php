<?php
namespace App\Models;

use App\Config\Dbh;
use PDO;

class AddMoreInfoModal {

    private $conn;

    public function __construct() {
        $db = new Dbh();
        $this->conn = $db->connection();
    }

    public function checksUser() {
        session_start();
        $id_recuiter = $_SESSION["idRecruiter"];

        $firstquery = "SELECT id FROM detailinfos WHERE id_recruiter = :id_recuiter";
        $firstStmt = $this->conn->prepare($firstquery);
        $firstStmt->bindParam(":id_recuiter", $id_recuiter, PDO::PARAM_INT);
        $firstStmt->execute();

        $row = $firstStmt->fetch(PDO::FETCH_ASSOC);
        return $row !== false; 
    }

    public function AddNewInfos($webSite, $industry, $description) {
        session_start();
        $id_recuiter = $_SESSION["idRecruiter"];

        $query = "INSERT INTO detailinfos (id_recruiter, website, industry, description)
                  VALUES (:id_recruiter, :website, :industry, :description)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_recruiter", $id_recuiter, PDO::PARAM_INT);
        $stmt->bindParam(":website", $webSite, PDO::PARAM_STR);
        $stmt->bindParam(":industry", $industry, PDO::PARAM_STR);
        $stmt->bindParam(":description", $description, PDO::PARAM_STR);

        $stmt->execute();

        header("Location: ./profileRecruiter.php");
        exit();
    }
}


?>
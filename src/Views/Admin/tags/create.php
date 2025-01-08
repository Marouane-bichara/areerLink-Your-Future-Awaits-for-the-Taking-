<?php
  require_once "../../../../vendor/autoload.php";

  use App\Controllers\Tags\CreateTagsController;

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addTag"]))
{
    $nameTag = $_POST["addTag"];
}
$createtage = new CreateTagsController();
$createtage->setTagss($nameTag);
?>
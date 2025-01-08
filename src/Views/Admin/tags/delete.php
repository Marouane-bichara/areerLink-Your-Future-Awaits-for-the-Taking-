<?php

use App\Controllers\Tags\DeleteTagsContoller;

require_once "../../../../vendor/autoload.php";


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tagId']))
{
    $id = $_POST["tagId"];
    $delete = new DeleteTagsContoller();
    $delete->deleteTagsController($id);
}

?>
<?php
namespace App\Controllers\Tags;

use App\Models\CreatetagsModel;

class CreateTagsController{
    public function setTagss($name)
    {
        $createTag = new CreatetagsModel();
        $createTag->setTags($name);
    }
}

?>
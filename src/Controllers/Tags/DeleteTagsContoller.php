<?php

namespace App\Controllers\Tags;

use App\Models\DeleteTagsModel;

class DeleteTagsContoller{
    public function deleteTagsController($id)
    {
        $deleteTagModel = new DeleteTagsModel();
        $deleteTagModel->deleteTagsModel($id);
    }
}

?>
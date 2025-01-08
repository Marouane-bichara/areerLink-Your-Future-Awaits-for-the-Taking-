<?php
namespace App\Controllers\Tags;

use App\Models\GetTagsModel;

    class GetTagsController{
        public function getTagsController(){
            $tagsmodel = new GetTagsModel();
            $tagsresault = $tagsmodel->gettagsmodal();
            return $tagsresault;
        }

        public function numberofCategories()
        {
            $tagModalnum = new GetTagsModel();
            $tagNums = $tagModalnum->getNumberOftags();
            return $tagNums;
        }
    }
?>
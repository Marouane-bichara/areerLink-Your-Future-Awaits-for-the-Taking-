<?php
namespace App\Controllers\Category;
use App\Models\GetCategoryModel;

    class GetCategoryController{
        public function getCategoriesController(){
            $categoryModal = new GetCategoryModel();
            $categories = $categoryModal->getcategoriesmodal();
            return $categories;
        }
    }
?>
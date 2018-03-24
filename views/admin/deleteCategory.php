<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/24/2018
 * Time: 12:10 PM
 */
include "../../vendor/autoload.php";
use App\Category\Category;

$category = new Category();
    $categoryDelete = $category->categoryDelete($_GET['catId'])
?>
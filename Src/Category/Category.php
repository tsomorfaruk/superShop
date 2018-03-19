<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/19/2018
 * Time: 7:04 PM
 */

namespace App\Category;
use App\Config\Database;
use App\Helpers\Format;
use App\Session\Session;

class Category
{
    private $db;
    private $format;
    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function categoryInsert($categoryName,$categoryDescription,$publicationStatus)
    {
        $query = "INSERT INTO category(category_name,category_discription,publication_status) 
                  VALUES('$categoryName','$categoryDescription','$publicationStatus')";
        $categoryInsert = $this->db->insert($query);
        if ($categoryInsert)
        {

            $msg = "<span class='success'><h2> Category Inserted Successfully. </h2></span>";
            Session::set('message',$msg);
            header("Location:../../views/admin/addCategory.php");
        }
        else
        {
            $msg = "<span class='error'><h2> Category Not Inserted. </h2></span>";
            return $msg;
        }
    }
}
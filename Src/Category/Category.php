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

    public function categoryInsert($categoryName, $categoryDescription, $publicationStatus)
    {
        $query = "INSERT INTO category(category_name,category_discription,publication_status) 
                  VALUES('$categoryName','$categoryDescription','$publicationStatus')";
        $categoryInsert = $this->db->insert($query);
        if ($categoryInsert) {
            $msg = "<span class='success'><h2> Category Inserted Successfully. </h2></span>";
            Session::set('message', 'Category Inserted Successfully.');
            header("Location:../../views/admin/addCategory.php");
            //redirect("Location:../../views/admin/addCategory.php")->with('message', 'Category Inserted Successfully.');
        } else {
            $msg = "<span class='error'><h2> Category Not Inserted. </h2></span>";
            return $msg;
        }
    }

    public function categoryManage()
    {
        $query = "SELECT * FROM category";
        $categorymanage = $this->db->select($query);
        $categories = $categorymanage->fetch_all();
        return $categories;
    }

    public function categoryById($id)
    {
        $query = "SELECT *FROM category WHERE category_id = '$id'";
        $categoryById = $this->db->select($query);
        $getCategoryById = $categoryById->fetch_assoc();
        //$getCategoryById = mysqli_escape_string($getCategoryById);
        return $getCategoryById;
    }

    public function categoryUpdate($categoryId, $categoryName, $categoryDescription, $publicationStatus)
    {
        $query = "UPDATE category SET category_name='$categoryName',category_discription='$categoryDescription', publication_status='$publicationStatus' WHERE category_id='$categoryId'";
        $categoryUpdate = $this->db->update($query);
        if ($categoryUpdate) {
            $msg = "<span class='success'><h2> Category Inserted Successfully. </h2></span>";
            Session::set('message', 'Category Updated Successfully.');
            header("Location:../../views/admin/manageCategory.php");
            // redirect("Location:../../views/admin/manageCategory.php")->with('message', 'Category Inserted Successfully.');
        } else {
            $msg = "<span class='error'><h2> Category Not Updated. </h2></span>";
            return $msg;
        }
    }

    public function categoryDelete($id = '')
    {
        $query = "DELETE FROM category WHERE category_id='$id'";
        $categoryDelete = $this->db->delete($query);
        if ($categoryDelete) {
            $msg = "<span class='success'><h2> Category Deleted Successfully. </h2></span>";
            Session::set('message', 'Category Deleted Successfully.');
            header("Location:../../views/admin/manageCategory.php");
            // redirect("Location:../../views/admin/manageCategory.php")->with('message', 'Category Inserted Successfully.');
        } else {
            $msg = "<span class='error'><h2> Category Not Deleted. </h2></span>";
            return $msg;
        }
    }
}
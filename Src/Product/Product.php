<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/25/2018
 * Time: 7:02 AM
 */
namespace App\Product;
include "../../vendor/autoload.php";
use App\Config\Database;
use App\Helpers\Format;
use App\Session\Session;

class Product
{
    private $db;
    private $format;
    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function productInsert($data, $file)
    {
        $productName = $data['productName'];
        $categoryId = $data['categoryId'];
        $manufacturerId = $data['manufacturerId'];
        $productPrice = $data['productPrice'];
        $productQuantity = $data['productQuantity'];
        $productShortDescription = $data['productShortDescription'];
        $productLongDescription = $data['productLongDescription'];
        $publicationStatus = $data['publicationStatus'];
        $imageName = $file['productImage']['name'];
        $file_temp = $file['productImage']['tmp_name'];
        $newImageName = explode('.', $imageName, 2);
        $newImageName[0] = $data['productName'];
        $newImageName = implode('.', $newImageName);
        $folder = "../../assets/images/" . $newImageName ;
        move_uploaded_file($file_temp,$folder);
        $imageUrl = $folder;

        $query = "INSERT INTO products(product_name,category_id,manufacturer_id,product_price,product_quantity,
              product_short_description,product_long_description,product_image,publication_status) 
                  VALUES('$productName','$categoryId','$manufacturerId','$productPrice','$productQuantity',
                  '$productShortDescription','$productLongDescription','$imageUrl','$publicationStatus')";
        $productInsert = $this->db->insert($query);
        if ($productInsert)
        {
            $msg = "<span class='success'><h2> Product Inserted Successfully. </h2></span>";
            Session::set('message','Product Inserted Successfully.');
            header("Location:../../views/admin/addProduct.php");
        }
        else
        {
            $msg = "<span class='error'><h2> Product Not Inserted. </h2></span>";
            return $msg;
        }

    }

    public function productManage()
    {
        $query = "SELECT products.*,category.category_name,manufactures.manufacture_name
        FROM products
        INNER JOIN category
        ON products.category_id = category.category_id
        INNER JOIN manufactures
        ON products.manufacturer_id = manufactures.manufacture_id";
        $productmanage = $this->db->select($query);
        return $productmanage;
    }
}
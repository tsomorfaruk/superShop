<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/25/2018
 * Time: 7:02 AM
 */

namespace App\Product;
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

        //$permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['productImage']['tmp_name'];
        $newImageName = explode('.', $file_name, 2);
        $newImageName[0] = $data['productName'];
        $newImageName[1] = 'jpg';
        $newImageName = implode('.', $newImageName);
        return $newImageName;
        die();
        $folder = "uploads/";
        move_uploaded_file($folder.$newImageName);
        $imageUrl = $folder . $newImageName;
        return $imageUrl;

    }
}
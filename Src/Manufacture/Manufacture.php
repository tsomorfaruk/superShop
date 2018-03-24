<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/24/2018
 * Time: 12:31 PM
 */

namespace App\Manufacture;

use App\Config\Database;
use App\Helpers\Format;
use App\Session\Session;

class Manufacture
{
    private $db;
    private $format;

    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function manufactureInsert($manufactureName, $manufactureDescription, $publicationStatus)
    {
        $query = "INSERT INTO manufactures(manufacture_name,manufacture_description,publicationStatus) 
                  VALUES('$manufactureName','$manufactureDescription','$publicationStatus')";
        $manufactureInsert = $this->db->insert($query);
        if ($manufactureInsert) {
            $msg = "<span class='success'><h2> Manufacture Inserted Successfully. </h2></span>";
            Session::set('message', 'Category Inserted Successfully.');
            header("Location:../../views/admin/addManufacturer.php");
        } else {
            $msg = "<span class='error'><h2> Manufacture Not Inserted. </h2></span>";
            return $msg;
        }
    }
}
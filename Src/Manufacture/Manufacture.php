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

    public function manufacturerManage()
    {
        $query = "SELECT * FROM manufactures";
        $manufacturermanage = $this->db->select($query);
        $manufacturers = $manufacturermanage->fetch_all();
        return $manufacturers;
    }

    public function manufacturerById($id)
    {
        $query = "SELECT *FROM manufactures WHERE manufacture_id = '$id'";
        $manufacturerById = $this->db->select($query);
        $getManufacturerById = $manufacturerById->fetch_assoc();
        return $getManufacturerById;
    }

    public function manufacturerUpdate($manufacturerId,$manufacturerName,$manufacturerDescription,$publicationStatus)
    {
        $query = "UPDATE manufactures SET manufacture_name='$manufacturerName',manufacture_description='$manufacturerDescription', publicationStatus='$publicationStatus' WHERE manufacture_id='$manufacturerId'";
        $manufacturerUpdate = $this->db->update($query);
        if ($manufacturerUpdate)
        {
            $msg = "<span class='success'><h2> Manufacturer Updated Successfully. </h2></span>";
            Session::set('message','Manufacturer Updated Successfully.');
            header("Location:../../views/admin/manageManufacturer.php");
        }
        else
        {
            $msg = "<span class='error'><h2> Manufacturer Not Updated. </h2></span>";
            return $msg;
        }
    }

    public function manufacturerDelete($id='')
    {
        $query = "DELETE FROM manufactures WHERE manufacture_id='$id'";
        $manufacturerDelete = $this->db->delete($query);
        if ($manufacturerDelete)
        {
            $msg = "<span class='success'><h2> Manufacturer Deleted Successfully. </h2></span>";
            Session::set('message','Manufacturer Deleted Successfully.');
            header("Location:../../views/admin/manageManufacturer.php");
        }
        else
        {
            $msg = "<span class='error'><h2> Manufacturer Not Deleted. </h2></span>";
            return $msg;
        }
    }

    public function manufacturerSelect(){
        $query = "SELECT * FROM manufactures";
        $manufacturerSelect = $this->db->select($query);
        return $manufacturerSelect;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/30/2018
 * Time: 9:38 AM
 */

namespace App\Customer;
include("../../vendor/autoload.php");
use App\Config\Database;
use App\Helpers\Format;
use App\Session\Session;

class Customer
{
    private $db;
    private $format;

    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function customerInsert($customerName, $customerEmail, $customerPassword)
    {
        $emailQuery = "SELECT *FROM customers WHERE customer_email = '$customerEmail'";
        $checkEmail = $this->db->select($emailQuery);
        if ($checkEmail) {
            $msg = "<span class='myerror'>Email Already Exist. Try with another Email.</span>";
            return $msg;
        } else {
            $query = "INSERT INTO customers(customer_name,customer_email,customer_password) 
                  VALUES('$customerName','$customerEmail','$customerPassword')";
            $customerInsert = $this->db->insert($query);
            if ($customerInsert) {
                $msg = "<span class='mysuccess'>Welcome to our Online Market.</span>";
                return $msg;
                header("Location:index.php");
            } else {
                $msg = "<span class='myerror'>Anything wrong!!! Try Again.</span>";
                return $msg;
            }
        }
    }

    public function customerSelect($customerEmail, $customerPassword){
        $query = "SELECT *FROM customers WHERE customer_email = '$customerEmail' AND customer_password='$customerPassword'";
        $customerSelect = $this->db->select($query);
        if ($customerSelect != false) {
            $customer = $customerSelect->fetch_assoc();
            Session::set("customerLogin",true);
            Session::set('customerId',$customer['customer_id']);
            Session::set('customerName',$customer['customer_name']);
            header("Location:order.php");
        }
        else{
            $msg = "<span class='myerror'> Email or Password not matched.</span>";
            return $msg;
        }
    }

}
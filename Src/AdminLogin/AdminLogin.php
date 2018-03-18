<?php
namespace App\AdminLogin;

include("../../vendor/autoload.php");
use App\Session\Session;
Session::checkLogin();
use App\config\Database;
use App\Helpers\Format;

class Adminlogin
{
    private $db;
    private $format;
    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function adminLogin($admin_email, $admin_password)
    {
        $admin_email = $this->format->validation($admin_email);
        $admin_password = $this->format->validation($admin_password);

        $admin_email = mysqli_escape_string($this->db->link, $admin_email);
        $admin_password = mysqli_escape_string($this->db->link, $admin_password);

        if (empty($admin_email) || empty($admin_password))
        {
            $loginmsg = " Username or Password must not be empty !";
            return $loginmsg;
        }
        else
        {
            $query = "SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_password= md5('$admin_password')";
            $result = $this->db->select($query);
            if($result != false)
            {
                $value = $result->fetch_assoc();
                Session::set("adminlogin", true);
                Session::set("admin_id", $value['admin_id']);
                Session::set("admin_name", $value['admin_name']);
                Session::set("admin_email", $value['admin_email']);
                Session::set("admin_password", $value['admin_password']);
                Session::set("admin_designation", $value['admin_designation']);
                header("Location: ../../views/admin/dashboard.php");
            }
            else
            {
                $loginmsg = " Username or Password are not matched !";
                return $loginmsg;
            }
        }
    }
}
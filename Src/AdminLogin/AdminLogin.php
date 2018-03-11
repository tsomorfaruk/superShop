<?php
namespace App\AdminLogin;

include("../../vendor/autoload.php");
use App\Session\Session;
use App\config\Database;
use App\Helpers\Format;
class AdminLogin
{
    private $db;
    private $format;
    public function __construct()
    {
        $this->db = new Database();
        $this->format = new Format();
    }

    public function adminLogin($admin_user, $admin_password)
    {

    }
}
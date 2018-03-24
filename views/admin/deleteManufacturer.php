<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/24/2018
 * Time: 7:26 PM
 */
include "../../vendor/autoload.php";
use App\Manufacture\Manufacture;

$manufacturer = new Manufacture();
$manufacturerDelete = $manufacturer->manufacturerDelete($_GET['manufacturerId']);
?>
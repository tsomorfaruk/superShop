<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/25/2018
 * Time: 7:03 AM
 */
include "../../vendor/autoload.php";
use App\Product\Product;

$product = new Product();
$productDelete = $product->productDelete($_GET['productId']);
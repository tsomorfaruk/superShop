<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/30/2018
 * Time: 6:38 AM
 */
include "../../vendor/autoload.php";
use App\Cart\Cart;

$cart = new Cart();
$cartDelete = $cart->cartDelete($_GET['cartId']);
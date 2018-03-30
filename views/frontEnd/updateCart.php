<?php
include "../../vendor/autoload.php";
use App\Cart\Cart;

$cart = new Cart();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartId = $_POST['cartId'];
    $productQuantity = $_POST['product_quantity'];
    $updateCart = $cart->updateCart($cartId, $productQuantity);
    header("Location:cart.php");
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/30/2018
 * Time: 11:07 PM
 */

include "../../vendor/autoload.php";
use App\Cart\Cart;
use App\Session\Session;
Session::init();
$login = Session::get("customerLogin");
if ($login == false){
    header("Location:login.php");
}
$cart = new Cart();
if (isset($_GET['orderId']) && $_GET['orderId']=='order'){
    $customerId = Session::get("customerId");
    $orderProduct = $cart->orderProduct($customerId);
    $deleteData = $cart->deleteCustomerCart();
    header("Location:success.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Check Out ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="../../assets/js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="../../assets/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <script src="../../assets/js/jquery.easing.min.js"></script>
</head>
<body>

<?php include("includes/header.php"); ?>
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <?php
                $getCartProduct = $cart->getCartProduct();
                if ($getCartProduct) {
                $quantity = 0;
                $sum = 0;
                $i = 0;
                while ($cartProduct = $getCartProduct->fetch_assoc()) {
                $i++;
                ?>
                <tr class="rem1">
                    <td class="invert"><?php echo $cartProduct['product_name']; ?></td>
                    <td class="invert"><?php echo $cartProduct['cproduct_quantity']; ?></td>
                    <td class="invert"><?php echo $cartProduct['product_price']; ?></td>
                    <td class="invert">$<?php
                        $total = $cartProduct['product_price'] * $cartProduct['cproduct_quantity'];;
                        echo $total; ?></td>
                    <?php
                    $quantity = $quantity + $cartProduct['cproduct_quantity'];
                    $sum = $sum + $total;
                    Session::set('sum', $sum);
                    Session::set('quantity', $quantity);
                    }
                    }
                    ?>
                </tr>
            </table>
        </div>
        <div class="checkout-left">
            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="?orderId=order">Order Now</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <?php
                    $cartCheck = $cart->cartCheck();
                    if ($cartCheck) {
                        ?>
                        <li>Total<i>-</i> <span>$ <?php
                                echo $sum; ?></span></li>
                        <li>Vat<i>-</i> <span>10% <?php
                                $vat = $sum * 0.1;
                                echo $vat; ?></span></li>
                        <li>Grand Total<i>-</i> <span>$ <?php
                                $gtotal = $vat + $sum;
                                echo $gtotal; ?></span></li>
                        <?php
                    } else {
                        ?>
                        <li>Total<i>-</i> <span>$ <?php echo 0; ?></span></li>
                        <li>Vat<i>-</i> <span>10% <?php echo 0; ?></span></li>
                        <li>Grand Total<i>-</i> <span>$ <?php echo 0; ?></span></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //check out -->

<?php
include("includes/footer.php"); ?>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/29/2018
 * Time: 12:20 PM
 */
include "../../vendor/autoload.php";
use App\Cart\Cart;
use App\Session\Session;
$cart = new Cart();
Session::init();
$login = Session::get("customerLogin");
if ($login == false){
    header("Location:login.php");
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
<div class="page-head">
    <div class="container">
        <h3>Check Out</h3>
    </div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
    <div class="container">
        <h3>My Order Details</h3>

        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <?php
                Session::init();
                $customerId = Session::get("customerId");
                $getOrderProduct = $cart->getOrderProduct($customerId);
                if ($getOrderProduct) {
                $i = 0;
                while ($orderProduct = $getOrderProduct->fetch_assoc()) {
                $i++;
                ?>
                <tr class="rem1">
                    <td class="invert"><?php echo $orderProduct['product_name']; ?></td>
                    <td class="invert"><?php echo $orderProduct['product_quantity']; ?></td>
                    <td class="invert">$<?php
                        $total = $orderProduct['product_price'] * $orderProduct['product_quantity'];;
                        echo $total; ?></td>
                </tr><?php }}?>
            </table>
        </div>

    </div>
</div>
<!-- //check out -->

<?php
include("includes/footer.php"); ?>
</body>
</html>

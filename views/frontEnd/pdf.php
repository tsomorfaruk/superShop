<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 4/6/2018
 * Time: 11:22 AM
 */

include "../../vendor/mpdf/mpdf/mpdf.php";
include "../../vendor/autoload.php";

use App\Cart\Cart;
use App\Session\Session;

$cart = new Cart();
/*Session::init();
$login = Session::get("customerLogin");
if ($login == false) {
    header("Location:login.php");
}*/
Session::init();
$customerId = Session::get("customerId");
$getOrderProduct = $cart->getOrderProduct($customerId);
if ($getOrderProduct) {
    $trs = "";
    $i = 0;
    while ($orderProduct = $getOrderProduct->fetch_assoc()) {
        $i++;

        $trs.="<tr>";
        $trs.="<td>".$orderProduct['product_name']."</td>";
        $trs.="<td>".$orderProduct['product_quantity'] . "</td>";
        $total=$orderProduct['product_price'] * $orderProduct['product_quantity'];
        $trs.="<td>".$total."</td>";
        $trs.="</tr>";
    }
}

$html = <<<EOD
<!DOCTYPE html>
<html>
<head>
    <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Check Out ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    &lt;!&ndash; //for-mobile-apps &ndash;&gt;
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    &lt;!&ndash; js &ndash;&gt;
    <script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
    &lt;!&ndash; //js &ndash;&gt;
    &lt;!&ndash; cart &ndash;&gt;
    <script src="../../assets/js/simpleCart.min.js"></script>
    &lt;!&ndash; cart &ndash;&gt;
    &lt;!&ndash; for bootstrap working &ndash;&gt;
    <script type="text/javascript" src="../../assets/js/bootstrap-3.1.1.min.js"></script>
    &lt;!&ndash; //for bootstrap working &ndash;&gt;
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
          rel='stylesheet' type='text/css'>
    <script src="../../assets/js/jquery.easing.min.js"></script>-->
</head>
<body>
<h3>My Order Details</h3>
<table border="1">
<thead>
     <tr>
          <th>Product Name</th>
          <th>Quantity</th>
         <th>Price</th>
     </tr>
</thead>
<tbody>
$trs;
</tbody>
</table>
EOD;
$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit();
?>

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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartId = $_POST['cartId'];
    $productQuantity = $_POST['cproduct_quantity'];
    $updateCart = $cart->updateCart($cartId, $productQuantity);
}

if (!isset($_GET['id'])){
    echo "<meta http-equiv='refresh' content='0;URL=?id=Live'/>";
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
        <h3>My Shopping Bag</h3>
        <?php
        if (isset($updateCart)) {
            ?>
            <p><?php echo $updateCart;?></p>
            <?php
        }
        ?>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                <tr>
                    <th>Remove</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Product Name</th>
                    <th>Price</th>
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
                    <td class="invert-closeb">
                        <div class="rem">
                            <a href="deleteCart.php?cartId=<?php echo $cartProduct['cart_id']; ?>"
                               onclick="return confirm('Are you want to delete this');"class="close1"></a>
                        </div>
                    </td>
                    <td class="invert-image" align="center"><img width="120px"
                                                                 src="<?php echo $cartProduct['product_image']; ?>"
                                                                 alt=" "
                                                                 class="img-responsive"/></td>
                    <td class="invert">
                        <div class="quantity">
                            <div class="quantity-select">
                                <form action="" method="post">
                                    <select id="country1" name="cproduct_quantity">
                                        <option value="<?php echo $cartProduct['cproduct_quantity'];?>"><?php echo $cartProduct['cproduct_quantity']; ?></option>
                                        <?php
                                        $productQuantity = $cartProduct['product_quantity'];
                                        for ($i = 1; $i <= $productQuantity; $i++) {
                                            ?>
                                            <option value="<?php echo $product_quantity = $i; ?>"><?php echo $i; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <input type="hidden" name="cartId" value="<?php echo $cartProduct['cart_id']; ?>">
                                    <input type="submit" value="Update">
                                </form>

                            </div>
                        </div>
                    </td>
                    <td class="invert"><?php echo $cartProduct['product_name']; ?></td>
                    <td class="invert">$<?php
                        $total = $cartProduct['product_price'] * $cartProduct['cproduct_quantity'];;
                        echo $total; ?></td>
                    <?php
                    $quantity = $quantity + $cartProduct['cproduct_quantity'];
                    $sum = $sum + $total;
                    Session::set('sum',$sum);
                    Session::set('quantity',$quantity);
                    }
                    }
                    ?>
                </tr>
            </table>
        </div>
        <div class="checkout-left">
            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To
                    Shopping</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <?php
                    $cartCheck = $cart->cartCheck();
                    if ($cartCheck){
                        ?>
                        <li>Total<i>-</i> <span>$ <?php
                                    echo $sum; ?></span></li>
                        <li>Vat<i>-</i> <span>10% <?php
                                    $vat = $sum * 0.1;
                                    echo $vat; ?></span></li>
                        <li>Grand Total<i>-</i> <span>$ <?php
                                    $gtotal = $vat + $sum;
                                    echo $gtotal;?></span></li>
                        <?php
                    }
                    else{
                        ?>
                        <li>Total<i>-</i> <span>$ <?php echo 0; ?></span></li>
                    <li>Vat<i>-</i> <span>10% <?php echo 0; ?></span></li>
                    <li>Grand Total<i>-</i> <span>$ <?php echo 0;?></span></li>
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

<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/30/2018
 * Time: 9:16 AM
 */
include "../../vendor/autoload.php";
use App\Customer\Customer;
use App\Session\Session;


$customer = new Customer();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registration'])) {
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $customerPassword = md5($_POST['customerPassword']);

    $customerInsert = $customer->customerInsert($customerName, $customerEmail, $customerPassword);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $customerEmail = $_POST['customerEmail'];
    $customerPassword = md5($_POST['customerPassword']);
    $customerSelect = $customer->customerSelect($customerEmail, $customerPassword);
}
$login = Session::get("customerLogin");
if ($login == true){
    header("Location:order.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home ::
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
    <!-- pignose css -->
    <link href="../../assets/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all"/>


    <!-- //pignose css -->
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
<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            <form method="post" action="">
                                <?php
                                if (isset($customerInsert)) {
                                    ?>
                                    <?php echo $customerInsert; ?>
                                <?php
                                }
                                ?>
                                <div class="sign-up">
                                    <h4>Name :</h4>
                                    <input type="text" name="customerName" placeholder="Type here" required>
                                </div>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" name="customerEmail" placeholder="Type here" required>
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" name="customerPassword" placeholder="Password" required>

                                </div>
                                <div class="sign-up">
                                    <input type="submit" name="registration" value="REGISTER NOW">
                                </div>
                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form method="post" action="">
                                <?php
                                if (isset($customerSelect)) {
                                    ?>
                                    <?php echo $customerSelect;
                                }
                                ?>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" name="customerEmail" placeholder="Email" required>
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" name="customerPassword" placeholder="Password"required>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="sign-in">
                                    <input type="submit" name="login" value="SIGNIN">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                            Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php

use App\Session\Session;
use App\Config\Database;
use App\Helpers\Format;
use App\Product\Product;
use App\Cart\Cart;
use App\Category\Category;

Session::init();
$database = new Database();
$format = new Format();
$product = new Product();
$cart = new Cart();

if (isset($_GET['action']) && $_GET['action'] == "logout") {
    Session::destroy();
}
if (isset($_GET['customerId'])){
    $delData = $cart->deleteCustomerCart();
    Session::destroy();
}
?>
<!-- header -->
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="../../index.html"><img src="../../assets/images/logo3.jpg"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All categories</option>
                        <option value="null">Electronics</option>
                        <option value="AX">kids Wear</option>
                        <option value="AX">Men's Wear</option>
                        <option value="AX">Women's Wear</option>
                        <option value="AX">Watches</option>
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                <?php
                $login = Session::get('customerId');
                if ($login == false) {
                    ?>
                    <li><a href="login.php" class="use1"><span>Login</span></a></li>
                    <?php
                } else {
                    ?>
                    <li><a href="?customerId=<?php Session::get('customerId')?>" class="use1"><span>Logout</span></a></li>
                    <?php
                } ?>

                <li><a class="fb" href="#"></a></li>
                <li><a class="twi" href="#"></a></li>
                <li><a class="insta" href="#"></a></li>
                <li><a class="you" href="#"></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home
                                    <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="manufacturer.php">Manufacturer</a>
                            <li class=" menu__item"><a class="menu__link" href="category.php">Category</a>
                            <li class=" menu__item"><a class="menu__link" href="payment.php">Payment</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <?php
                $getAmount = $cart->cartCheck();
                if ($getAmount) {
                    ?>
                    <a href="cart.php">
                        <h3>
                            <div class="total">
                                <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                (
                                <?php
                                $quantity = Session::get('quantity');
                                echo $quantity;
                                ?>
                                </span> items)
                            </div>

                        </h3>
                    </a>
                    <p><a href="#" class="simpleCart_empty"><?php
                            $sum = Session::get('sum');
                            echo "$" . $sum;
                            ?>
                        </a></p>
                    <?php
                } else {
                    echo "(Empty)";
                }
                ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


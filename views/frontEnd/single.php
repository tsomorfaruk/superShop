<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/28/2018
 * Time: 5:35 PM
 */
include "../../vendor/autoload.php";
use App\Product\Product;
use App\Cart\Cart;
$cart = new Cart();
$product = new Product();

if (!empty($_GET['productId'])) {
    $id = $_GET['productId'];
    $getProductDetailsById = $product->getProductDetailsById($id);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['productId'];
    $productQuantity = $_POST['product_quantity'];
    $addToCart = $cart->addToCart($productQuantity,$id);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single ::
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
    <link rel="stylesheet" href="../../assets/css/flexslider.css" type="text/css" media="screen"/>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- single -->
    <script src="../../assets/js/imagezoom.js"></script>
    <script src="../../assets/js/jquery.flexslider.js"></script>
    <!-- single -->
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
<!-- banner -->
<div class="page-head">
    <div class="container">
        <h3>Single</h3>
    </div>
</div>
<!-- //banner -->
<!-- single -->

<div class="single">
    <div class="container">
        <?php
        if ($getProductDetailsById) {
            $getProductDetailsById = $getProductDetailsById->fetch_assoc();
            ?>
            <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <!-- FlexSlider -->
                        <script>
                            // Can also be used with $(document).ready()
                            $(window).load(function () {
                                $('.flexslider').flexslider({
                                    animation: "slide",
                                    controlNav: "thumbnails"
                                });
                            });
                        </script>
                        <!-- //FlexSlider-->
                        <ul class="slides">
                            <li data-thumb="images/d2.jpg">
                                <div class="thumb-image"><img
                                            src="<?php echo $getProductDetailsById['product_image']; ?>"
                                            class="img-responsive"></div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated"
                 data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                <h3><?php echo $getProductDetailsById['product_name']; ?></h3>
                <p><span class="item_price">$<?php echo $getProductDetailsById['product_price']; ?></span>
                    <?php $productPrice = $getProductDetailsById['product_price'];
                    $delProductPrice = $productPrice + 15; ?>
                    <del>- $<?php echo $delProductPrice; ?></del>
                </p>
                <div class="occasional">
                    <h5>Category :</h5>
                    <span><h3><?php echo $getProductDetailsById['category_name']; ?></h3></span>
                    <div class="clearfix"></div>
                </div>
                <div class="occasional">
                    <h5>Manufacture :</h5>
                    <span><h3><?php echo $getProductDetailsById['manufacture_name']; ?></h3></span>
                    <div class="clearfix"></div>
                </div>
                <form action="single.php" method="post">
                    <div class="color-quality">
                        <div class="color-quality-right">
                            <h5>Quantity :</h5>
                            <select id="country1" name="product_quantity" onchange="change_country(this.value)" class="frm-field required sect" required>
                                <?php
                                $productQuantity = $getProductDetailsById['product_quantity'];
                                for ($i = 1; $i <= $productQuantity; $i++) {
                                    ?>
                                    <option value="<?php echo $product_quantity = $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                        <div class="clearfix"></div>
                    <input type="hidden" name="productId" value="<?php echo $getProductDetailsById['product_id']?>">
                    <div class="occasion-cart">
                        <input type="submit" name="adToCart" value="Add to cart" class="item_add hvr-outline-out button2">
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>

            <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                                                  data-toggle="tab"
                                                                  aria-controls="home"
                                                                  aria-expanded="true">Description</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home"
                             aria-labelledby="home-tab">
                            <h5>Product Brief Description</h5>
                            <p>
                                <span><?php echo $getProductDetailsById['product_long_description']; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- //single -->

<?php
include("includes/footer.php"); ?>

</body>
</html>
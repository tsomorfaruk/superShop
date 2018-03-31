<?php
include "../../vendor/autoload.php";
use App\Product\Product;
$product = new Product();
$categoryId = $_GET['categoryId'];
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
<?php
include("includes/header.php"); ?>

<!-- content-bottom -->
<!-- product-nav -->

<div class="product-easy">
    <div class="container">

        <script src="../../assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });

        </script>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                </ul>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        <?php
                        $getCategoryProducts = $product->getCategoryProducts($categoryId);
                        if ($getCategoryProducts){
                            while ($getCategoryProduct = $getCategoryProducts->fetch_assoc()) {
                                ?>
                                <div class="col-md-3 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item">
                                            <img src="<?php echo $getCategoryProduct['product_image'];?>" height="220px" alt="" class="pro-image-front">
                                            <img src="<?php echo $getCategoryProduct['product_image'];?>" height="220px" alt="" class="pro-image-back">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.php?productId=<?php echo $getCategoryProduct['product_id'];?>" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                        </div>
                                        <div class="item-info-product ">
                                            <h4><a href="single.html"><?php echo $getCategoryProduct['product_name'];?></a></h4>
                                            <div class="info-product-price">
                                                <span class="item_price">$<?php echo $getCategoryProduct['product_price'];?></span>
                                                <?php $productPrice = $getCategoryProduct['product_price'];
                                                $delProductPrice = $productPrice + 15;?>
                                                <del><?php echo $delProductPrice ;?></del>
                                            </div>
                                            <a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }}
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php"); ?>


</body>
</html>
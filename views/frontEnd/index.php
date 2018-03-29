<?php
include "../../vendor/autoload.php";
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
<!-- banner -->
<div class="banner-grid">
    <div id="visual">
        <div class="slide-visual">
            <!-- Slide Image Area (1000 x 424) -->
            <ul class="slide-group">
                <li><img class="img-responsive" src="../../assets/images/ba1.jpg" alt="Dummy Image"/></li>
                <li><img class="img-responsive" src="../../assets/images/ba2.jpg" alt="Dummy Image"/></li>
                <li><img class="img-responsive" src="../../assets/images/ba3.jpg" alt="Dummy Image"/></li>
            </ul>

            <!-- Slide Description Image Area (316 x 328) -->
            <div class="script-wrap">
                <ul class="script-group">
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="../../assets/images/baa1.jpg"
                                                       alt="Dummy Image"/></div>
                    </li>
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="../../assets/images/baa2.jpg"
                                                       alt="Dummy Image"/></div>
                    </li>
                    <li>
                        <div class="inner-script"><img class="img-responsive" src="../../assets/images/baa3.jpg"
                                                       alt="Dummy Image"/></div>
                    </li>
                </ul>
                <div class="slide-controller">
                    <a href="#" class="btn-prev"><img src="../../assets/images/btn_prev.png" alt="Prev Slide"/></a>
                    <a href="#" class="btn-play"><img src="../../assets/images/btn_play.png" alt="Start Slide"/></a>
                    <a href="#" class="btn-pause"><img src="../../assets/images/btn_pause.png" alt="Pause Slide"/></a>
                    <a href="#" class="btn-next"><img src="../../assets/images/btn_next.png" alt="Next Slide"/></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script type="text/javascript" src="../../assets/js/pignose.layerslider.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function () {
            $('#visual').pignoseLayerSlider({
                play: '.btn-play',
                pause: '.btn-pause',
                next: '.btn-next',
                prev: '.btn-prev'
            });
        });
        //]]>
    </script>

</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals">
    <div class="container">
        <h3><span>new </span>arrivals</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
        <div class="new_grids">
            <div class="col-md-4 new-gd-left">
                <img src="../../assets/images/wed1.jpg" alt=" "/>
                <div class="wed-brand simpleCart_shelfItem">
                    <h4>Wedding Collections</h4>
                    <h5>Flat 50% Discount</h5>
                    <p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2"
                                                                          href="#">add to cart </a></p>
                </div>
            </div>
            <div class="col-md-4 new-gd-middle">
                <div class="new-levis">
                    <div class="mid-img">
                        <img src="../../assets/images/levis1.png" alt=" "/>
                    </div>
                    <div class="mid-text">
                        <h4>up to 40% <span>off</span></h4>
                        <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="new-levis">
                    <div class="mid-text">
                        <h4>up to 50% <span>off</span></h4>
                        <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                    </div>
                    <div class="mid-img">
                        <img src="../../assets/images/dig.jpg" alt=" "/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 new-gd-left">
                <img src="../../assets/images/wed2.jpg" alt=" "/>
                <div class="wed-brandtwo simpleCart_shelfItem">
                    <h4>Spring / Summer</h4>
                    <p>Shop Men</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
    <div class="col-md-7 content-lgrid">
        <div class="col-sm-6 content-img-left text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="../../assets/images/p1.jpg" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4>Mobiles</h4>
                        <span class="separator"></span>
                        <p><span class="item_price">$500</span></p>
                        <span class="separator"></span>
                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 content-img-right">
            <h3>Special Offers and 50%<span>Discount On</span> Mobiles</h3>
        </div>

        <div class="col-sm-6 content-img-right">
            <h3>Buy 1 get 1 free on <span> Branded</span> Watches</h3>
        </div>
        <div class="col-sm-6 content-img-left text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="../../assets/images/p2.jpg" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4>Watches</h4>
                        <span class="separator"></span>
                        <p><span class="item_price">$250</span></p>
                        <span class="separator"></span>
                        <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-5 content-rgrid text-center">
        <div class="content-grid-effect slow-zoom vertical">
            <div class="img-box"><img src="../../assets/images/p4.jpg" alt="image" class="img-responsive zoom-img"></div>
            <div class="info-box">
                <div class="info-content simpleCart_shelfItem">
                    <h4>Shoes</h4>
                    <span class="separator"></span>
                    <p><span class="item_price">$150</span></p>
                    <span class="separator"></span>
                    <a class="item_add hvr-outline-out button2" href="#">add to cart </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //content-bottom -->
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
                        $getPublishedProducts = $product->getPublishedProduct();
                        if ($getPublishedProducts){
                            while ($getPublishedProduct = $getPublishedProducts->fetch_assoc()) {
                            ?>
                            <div class="col-md-3 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="../../assets/images/a1.png" alt="" class="pro-image-front">
                                        <img src="../../assets/images/a1.png" alt="" class="pro-image-back">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.php?productId=<?php echo $getPublishedProduct['product_id'];?>" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>

                                    </div>
                                    <div class="item-info-product ">
                                        <h4><a href="single.html"><?php echo $getPublishedProduct['product_name'];?></a></h4>
                                        <div class="info-product-price">
                                            <span class="item_price">$<?php echo $getPublishedProduct['product_price'];?></span>
                                            <?php $productPrice = $getPublishedProduct['product_price'];
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
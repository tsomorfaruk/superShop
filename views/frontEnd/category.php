<?php
include "../../vendor/autoload.php";
use App\Category\Category;

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
                <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                        </tr>
                        </thead>

                        <?php
                        $category = new Category();
                        $getCategory = $category->categorySelect();
                        if ($getCategory) {
                            $i = 0;
                            while ($category = $getCategory->fetch_assoc()) {
                                ?>
                                <tr class="rem1"><td class="invert">
                                    <a href="productByCategory.php?categoryId=<?php echo $category['category_id'];?>"><?php echo $category['category_name']; ?></a>
                                </td>


                                </tr><?php
                            }
                        }
                        ?>


                    </table>
                </div>
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
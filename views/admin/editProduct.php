<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/25/2018
 * Time: 7:03 AM
 */
include "../../vendor/autoload.php";
use App\Product\Product;
use App\Category\Category;
use App\Manufacture\Manufacture;

$id = $_GET['productId'];
$product = new Product();
if (!empty($_GET['productId'])) {
    $getProductById = $product->productById($id);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitBtn'])) {
    $productUpdate = $product->productUpdate($_POST, $_FILES);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Theme - Edit Product</title>
    <link href="../../assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../../assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../assets/admin/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../../assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <?php include("includes/header.php");
        include("includes/menubar.php") ?>
    </nav>

    <div id="page-wrapper">
        <?php
        if (isset($categoryInsert)) {
            echo Session::get('message');
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Product Edit</h3>
                <h2 class="text-center text-success"></h2>
                <form class="form-horizontal" method="post" action="editProduct.php" name="editProductForm"
                      enctype="multipart/form-data">
                    <div class="well">
                        <input type="hidden" name="productId" value="<?php echo $getProductById['product_id']; ?>">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="productName"
                                       value="<?php echo $getProductById['product_name']; ?>">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="categoryId">
                                    <option value="<?php echo $getProductById['category_id']; ?>"><?php echo $getProductById['category_name']; ?></option>
                                    <?php
                                    $category = new Category();
                                    $getCategory = $category->categoryManage();
                                    foreach ($getCategory as $value) {
                                        ?>
                                        <option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Manufacturer Name</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="manufacturerId">
                                    <option value="<?php echo $getProductById['manufacturer_id']; ?>"><?php echo $getProductById['manufacture_name']; ?></option>
                                    <?php
                                    $manufacturer = new Manufacture();
                                    $getManufacturer = $manufacturer->manufacturerManage();
                                    foreach ($getManufacturer as $value){
                                            ?>
                                            <option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="productPrice"
                                       value="<?php echo $getProductById['product_price']; ?>">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="productQuantity"
                                       value="<?php echo $getProductById['product_quantity']; ?>">
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Product Short Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="productShortDescription"
                                          rows="8"><?php echo $getProductById['product_short_description']; ?></textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Product Long Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="productLongDescription"
                                          rows="8"><?php echo $getProductById['product_long_description']; ?></textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="productImage"/>
                                <img src="<?php echo $getProductById['product_image']; ?>" height="50px" width="60px"/>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="publicationStatus">
                                    <option>Select Publication status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submitBtn" class="btn btn-success btn-block"> Save Product
                                    Info
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['publicationStatus'].value = "<?php echo $getProductById['publication_status'];?>"
    </script>
    <script src="../../assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/admin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../assets/admin/vendor/raphael/raphael.min.js"></script>
    <script src="../../assets/admin/vendor/morrisjs/morris.min.js"></script>
    <script src="../../assets/admin/data/morris-data.js"></script>
    <script src="../../assets/admin/dist/js/sb-admin-2.js"></script>
</body>
</html>
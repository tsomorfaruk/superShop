<?php
include "../../vendor/autoload.php";
use App\Category\Category;
use App\Session\Session;

$category = new Category();
$categories = $category->categoryManage();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Theme</title>
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
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Show Category</h3>
                <h2 class="text-center text-success"><?php Session::get('message')?></h2>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $category[0]; ?></th>
                            <td><?php echo $category[1]; ?></td>
                            <td><?php echo $category[2]; ?></td>
                            <td><?php echo $category[3] == 1 ? 'Published' : 'Unpublished'; ?></td>
                            <td>
                                <a href="editCategory.php?catId=<?php echo $category[0]; ?>" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="deleteCategory.php?catId=<?php echo $category[0]; ?>" class="btn btn-danger"
                                   onclick="return confirm('Are you want to delete this');">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../../assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/admin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="../../assets/admin/vendor/raphael/raphael.min.js"></script>
    <script src="../../assets/admin/vendor/morrisjs/morris.min.js"></script>
    <script src="../../assets/admin/data/morris-data.js"></script>
    <script src="../../assets/admin/dist/js/sb-admin-2.js"></script>
</body>
</html>
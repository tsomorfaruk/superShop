<?php
include "../../vendor/autoload.php";
use App\Category\Category;

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

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <?php include("includes/navbar.php"); ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Show Category</h3>
                    <h2 class="text-center text-success"></h2>
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
                                    <a href="{{'/manufacturer/delete/'.$category->id}}" class="btn btn-danger"
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
    </div>
</div>
<!-- jQuery -->
<script src="../../assets/admin/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../../assets/admin/js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="../../assets/admin/js/plugins/morris/raphael.min.js"></script>
<script src="../../assets/admin/js/plugins/morris/morris.min.js"></script>
<script src="../../assets/admin/js/plugins/morris/morris-data.js"></script>
</body>

</html>
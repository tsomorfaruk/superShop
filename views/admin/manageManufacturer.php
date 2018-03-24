<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/24/2018
 * Time: 12:26 PM
 */
include "../../vendor/autoload.php";
use App\Manufacture\Manufacture;
use App\Session\Session;

$manufacturer = new Manufacture();
$manufacturers = $manufacturer->manufacturerManage();
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
                    <h3 class="page-header">Show Manufacturer</h3>
                    <h2 class="text-center text-success"><?php Session::get('message')?></h2>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Manufacturer Name</th>
                            <th>Manufacturer Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($manufacturers as $manufacturer) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $manufacturer[0]; ?></th>
                                <td><?php echo $manufacturer[1]; ?></td>
                                <td><?php echo $manufacturer[2]; ?></td>
                                <td><?php echo $manufacturer[3] == 1 ? 'Published' : 'Unpublished'; ?></td>
                                <td>
                                    <a href="editManufacturer.php?catId=<?php echo $manufacturer[0]; ?>" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="deleteManufacturer.php?catId=<?php echo $manufacturer[0]; ?>" class="btn btn-danger"
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
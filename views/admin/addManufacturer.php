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
$manufacture = new Manufacture();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $manufactureName = $_POST['manufactureName'];
    $manufactureDescription = $_POST['manufactureDescription'];
    $publicationStatus = $_POST['publicationStatus'];

    $manufactureInsert = $manufacture->manufactureInsert($manufactureName, $manufactureDescription, $publicationStatus);
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
        <div class="container-fluid"
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Manufacture</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Manufacture Add</h3>
            <h2 class="text-center text-success"></h2>
            <form class="form-horizontal" method="post" action="addManufacturer.php">
                <div class="well">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Manufacture Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="manufactureName" required>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Manufacture Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="manufactureDescription" rows="8" required></textarea>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Publication Status</label>
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
                            <button type="submit" name="submit" class="btn btn-success btn-block"> Save Category Info
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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
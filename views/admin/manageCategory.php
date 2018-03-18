<?php
include "../../vendor/autoload.php";
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
    <link href="../../assets/admin/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include("includes/navbar.php"); ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Category
                        <small>Statistics Overview</small>
                    </h1>
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
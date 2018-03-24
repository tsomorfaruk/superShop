<?php
/**
 * Created by PhpStorm.
 * User: omor
 * Date: 3/24/2018
 * Time: 7:26 PM
 */
include "../../vendor/autoload.php";
use App\Manufacture\Manufacture;
$id = $_GET['manufacturerId'];
$manufacturer = new Manufacture();
if (!empty($_GET['manufacturerId']))
{
    $getManufacturerById = $manufacturer->manufacturerById($id);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $manufacturerId = $_POST['manufacturerId'];
    $manufacturerName = $_POST['manufacturerName'];
    $manufacturerDescription = $_POST['manufacturerDescription'];
    $publicationStatus = $_POST['publicationStatus'];
    $manufacturerUpdate = $manufacturer->manufacturerUpdate($manufacturerId, $manufacturerName, $manufacturerDescription, $publicationStatus);
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
        <?php
        if (isset($categoryInsert)) {
            echo Session::get('message');
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Category Edit</h3>
                <h2 class="text-center text-success"></h2>
                <form class="form-horizontal" method="post" action="editManufacturer.php" name="editManufacturerForm">
                    <div class="well">
                        <input type="hidden" name="manufacturerId" value="<?php echo $getManufacturerById['manufacture_id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="manufacturerName"
                                       value="<?php echo $getManufacturerById['manufacture_name']; ?>" required>
                                <span class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Category Description</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" name="manufacturerDescription" rows="8"
                                      required><?php echo $getManufacturerById['manufacture_description']; ?></textarea>
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
    <script>
        document.forms['editManufacturerForm'].elements['publicationStatus'].value = "<?php echo $getManufacturerById['publicationStatus'];?>"
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
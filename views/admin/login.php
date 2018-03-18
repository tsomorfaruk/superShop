<?php
include("../../vendor/autoload.php");
use App\AdminLogin\Adminlogin;

$adminLogin = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];

    $loginCheck = $adminLogin->adminLogin($admin_email, $admin_password);
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

    <title>Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/admin/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Log In</h3>
                </div>
                <span style="color: red; font-size: 18px">
                    <?php
                    if (isset($loginCheck))
                    {
                        echo $loginCheck;
                    }
                    ?>
                </span>
                <div class="panel-body">
                    <form action="login.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="admin_email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_password" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success btn-block" name="btn" type="submit" value="Login">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="../../assets/admin/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../../assets/admin/js/bootstrap.js}"></script>

</body>

</html>

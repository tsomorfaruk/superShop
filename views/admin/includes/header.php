<?php
use App\Session\Session;
Session::checkSession();
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../dashboard.php">Admin Panel</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == "logout")
    {
        Session::destroy();
    }
    ?>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <?php echo Session::get('admin_name')?> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="?action=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->
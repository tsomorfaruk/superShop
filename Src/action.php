<?php
use App\config\databese;

session_start();

$db = new database();
if (isset($_POST["username"]))
{
    $query = "SELECT * FROM customer
              WHERE user_name = '".$_POST["username"]."'
              AND customer_password = '".$_POST["password"]."'
              ";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION["username"] = $_POST["username"];
    }
    else
    {
        echo "No";
    }
}
?>
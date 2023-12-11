<?php
session_start();
include("config.php");
if(isset($_POST['sub']) == $_POST["txtname"] && $_POST["ddlsite"] && $_POST["txtpass"])
{
    $uname = $_POST["txtname"];
    $pass =  $_POST["txtpass"];
    $aname = $_SESSION['ai'];
    $site = $_POST['ddlsite'];
    $dt = date("y-m-d H:I:S");

    $ssql = "insert into branch_user values(null,$aname,'$uname','$pass','$site','$dt')";
    if(mysqli_query($con,$ssql))
    {
       echo "<script>alert('User Added'); window.location.href='add_user.php';</script>";
    }
    else
    {
        echo "<script>alert('User Not Added'); window.location.href='add_user.php';</script>";
    }
}
else
{
    header('Location:add_user.php');
}


?>
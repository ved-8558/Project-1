<?php
include('config.php');

$id = $_POST['txtid'];
$name = $_POST['txtname'];
$pass = $_POST['txtpass'];

// echo $name;
// echo $id;
// echo $pass;
// exit;

$ssql = "update branch_user set b_name = '$name' AND b_pass = '$pass' where br_id = $id";

if(mysqli_query($con,$ssql))
{
    header('Location:add_user.php');
}
else
{
    echo "update fail";
}


?>
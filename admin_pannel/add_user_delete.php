<?php
include('config.php');
$id = $_GET['id'];

$ssql = "delete from branch_user where br_id = $id";
//echo $ssql;
$res = mysqli_query($con,$ssql);

if($res)
{
    header("Location:add_user.php");
}
else
{
    echo "Error";
}
?>
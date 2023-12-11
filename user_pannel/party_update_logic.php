<?php
include('config.php');
$id = $_POST['txtid'];
$name = $_POST['txtpar'];

$ssql = "update party_tbl set par_name='$name'";
$res = mysqli_query($con,$ssql);
if($res)
{
    echo "<script>alert('Party Updated'); window.location.href='party.php';</script>";
}
else
{
    echo "<script>alert('Party Not Updated'); window.location.href='party.php';</script>";
}
?>
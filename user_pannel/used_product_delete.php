<?php
include('config.php');

$id = $_GET['id'];

$del = "delete from used_product where up_id = $id";
$res = mysqli_query($con,$del);

if($res)
{
    echo "<script>alert('Used_product Deleted'); window.location.href='used_product.php';</script>";
}
else
{
    echo "<script>alert('Used_product Not Deleted'); window.location.href='used_product.php';</script>";
}
?>
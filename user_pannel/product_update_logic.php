<?php
include('config.php');

if(isset($_POST['sub']) == $_POST['txtname'])
{
$id = $_POST['txtid'];
$name = $_POST['txtname'];

$ssql = "update product_tbl set pro_name = '$name' where pro_id = $id";
$res = mysqli_query($con,$ssql);
if($res)
{
    echo "<script>alert('Product Updated'); window.location.href='product.php';</script>";
}
else
{
    echo "<script>alert('Product Not Updated'); window.location.href='product.php';</script>";
}
}
else
{
    header('Location:product_update_design.php');
}

?>
<?php
include('config.php');
$id = $_GET['id'];

$del = "delete from product_tbl where pro_id = $id ";
$res = mysqli_query($con,$del);

if($res)
{
    echo "<script>alert('Product Deleted'); window.location.href='product.php';</script>";
}
else
{
    echo "<script>alert('Product Not Deleted'); window.location.href='product.php';</script>";
}

?>
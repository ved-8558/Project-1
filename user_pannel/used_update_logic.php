<?php
include('config.php');

if(isset($_POST['sub']) && $_POST['txtqt'])
{
    $name =$_POST['txtname'];
    $qt =  $_POST['txtqt'];
    $id = $_POST['txtid'];

    $upd = "update used_product set up_name = '$name', up_quantity = '$qt' where up_id = $id";
    $res = mysqli_query($con,$upd);

    if($res)
    {
        echo "<script>alert('Used_product Updated'); window.location.href='used_product.php';</script>";
    }
    else
    {
        echo "<script>alert('Used_product Not Updated'); window.location.href='used_product.php';</script>";
    }
}
else
{
    header('Location:used_product.php');
}
?>
<?php
session_start();
include('config.php');

if(isset($_POST['sub']) == $_POST['txtpronm'])
{
    $name = $_POST['txtpronm'];
    $user = $_SESSION['bi'];

    $ssql = "insert into product_tbl values(null,$user,'$name')";
    $res = mysqli_query($con,$ssql);

    if($res)
    {
        echo "<script>alert('Product Inserted'); window.location.href='product.php';</script>";
    }
    else
    {
        echo "<script>alert('Product Not Inserted'); window.location.href='product.php';</script>";
    }
}
else
{
    header('Location:product.php');
}
?>
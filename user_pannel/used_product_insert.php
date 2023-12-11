<?php
session_start();
include('config.php');

if(isset($_POST['sub']) == $_POST['txtqt'])
{
    $bid = $_SESSION['bi'];
    $pro = $_POST['txtname'];
    $qt = $_POST['txtqt'];

    $ins = "insert into used_product values (null,$bid,'$pro',$qt)";
    $res = mysqli_query($con,$ins);

    if($res)
    {
        echo "<script>alert('Used_product Inserted'); window.location.href='used_product.php';</script>";
    }
    else
    {
        echo "<script>alert('Used_product Not Inserted'); window.location.href='used_product.php';</script>";
    }
}
else
{
    header('Location:used_product.php');
}
?>
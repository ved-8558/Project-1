<?php
session_start();
include('config.php');


if(isset($_POST['sub']))
{
    $id =  $_POST['txtid'];
 
    $name = $_POST['txtproduct'];
    $site = $_POST['txtsite'];
    $party = $_POST['txtparty'];
    $qt = $_POST['txtqt'];
    $price = $_POST['txtprice'];
    $v = $_SESSION['bi'];
    
    $targetfile="purchase_bill/";
	$fileName = $v."_".basename($_FILES["gfile"]["name"]);
	$targetFilePath = $targetfile . $fileName;

    if(move_uploaded_file($_FILES["gfile"]["tmp_name"],$targetFilePath))
    {
    $upd = "update purchase_tbl set site_name = '$site', party_name = '$party',
     p_name = '$name', p_quantity = '$qt', p_price ='$price',p_bill = '$fileName' where p_id = $id";

    $res = mysqli_query($con,$upd);
    
    if($res)
    {
        echo "<script>alert('Purchase Updated'); window.location.href='purchase.php';</script>";
    }
    else
    {
        echo "<script>alert('Enter Proper Value'); window.location.href='purchase.php';</script>";
    }
    }
}
else
{
    header('Location:purchase.php');
}

?>
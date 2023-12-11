<?php
include('config.php');
$id = $_GET['id'];

$del = "delete from purchase_tbl where p_id = $id";
$res = mysqli_query($con,$del);

if($res)
{
    echo "<script>alert('Purchase Deleted'); window.location.href='purchase.php';</script>";
}
else
{ 
    echo "<script>alert('Purchase Not Deleted'); window.location.href='purchase.php';</script>";
}

?>
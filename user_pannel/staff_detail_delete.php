<?php
include('config.php');

$id= $_GET['id'];

$del = "delete from branch_staff where bs_id=$id";
$res = mysqli_query($con,$del);

if($res)
{
    echo "<script>alert('Staff Deleted'); window.location.href='staff_detail.php';</script>";
}
else
{
    echo "<script>alert('Staff Not Deleted'); window.location.href='staff_detail.php';</script>";
}

?>
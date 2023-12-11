<?php
include('config.php');
$id = $_GET['id'];
$del = "delete from post where pos_id = $id";
$res = mysqli_query($con,$del);

if($res)
{
    echo "<script>alert('Data Deleted'); window.location.href='post.php';</script>";
}
else
{
    echo "<script>alert('Data Not Deleted'); window.location.href='post.php';</script>";
}

?>
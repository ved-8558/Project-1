<?php
include('config.php');
$id = $_GET['id'];
//echo $id;

$ssql = "delete from party_tbl where par_id=$id";
$res = mysqli_query($con,$ssql);
if($res)
{
    echo "<script>alert('Party Deleted'); window.location.href='party.php';</script>";
}
else
{
    echo "<script>alert('Party Not deleted'); window.location.href='party.php';</script>";
}
?>
<?php
session_start();
include('config.php');

if(isset($_POST['sub']) == $_POST['txtpar'])
{
$id = $_SESSION['bi'];
$name = $_POST['txtpar'];

$ssql = "insert into party_tbl values(null,'$id','$name')";
$res = mysqli_query($con,$ssql);
if($res)
{
    echo "<script>alert('Party Added'); window.location.href='party.php';</script>";
}
else
{
    echo "<script>alert('Party Not Added'); window.location.href='party.php';</script>";
}
}
else
{
    header('Location:party.php');
}
?>
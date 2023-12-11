<?php
include("config.php");

$id = $_GET['id'];
$ssql = "delete from site where s_id=$id";
//echo $ssql;
$res = mysqli_query($con,$ssql);
if($res)
{
   header('Location:site.php');
}
else
{
    echo "Errror while deleting";
}
?>
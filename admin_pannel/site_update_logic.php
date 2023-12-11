<?php 
include('config.php');
$id=$_POST['txtid'];
$name = $_POST['txtsite'];

$ssql = "update site set s_name = '$name' where s_id=$id";
$res = mysqli_query($con,$ssql);
if($res)
{
    echo "<script>alert('Site Updated'); window.location.href='site.php'</script>";
}
else
{
    echo "<script>alert('Site Not Updated'); window.location.href='site.php'</script>";
}
?>
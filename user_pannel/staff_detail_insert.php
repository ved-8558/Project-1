<?php 
session_start();
include('config.php');

if(isset($_POST['sub']) && $_POST['txtpost'])
{
    $name = $_POST['txtname'];
    $doj = $_POST['txtdoj'];
    $add = $_POST['txtadd'];
    $num = $_POST['txtnum'];
    $post = $_POST['txtpost'];
    $bi = $_SESSION['bi'];

    $ins = "insert into branch_staff values(null,$bi,'$name','$doj','$add',$num,'$post')";
    $res = mysqli_query($con,$ins);

    if($res)
    {
        echo "<script>alert('Staff Added'); window.location.href='staff_detail.php';</script>";
    }
    else
    {
        echo "<script>alert('Staff Not Added'); window.location.href='staff_detail.php';</script>";
    }

}
else
{
    header('Location:staff_detail.php');
}
?>
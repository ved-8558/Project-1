<?php
session_start();
include('config.php');
if(isset($_POST['sub']) == $_POST['txtpost'])
{
    $name = $_POST['txtpost'];
    $id = $_SESSION['bi'];
    $ins = "insert into post values(null,$id,'$name')";
    $res = mysqli_query($con,$ins);

    if($res)
    {
        echo "<script>alert('Post Added'); window.location.href='post.php';</script>";
    }
    else
    {
        echo "<script>alert('Error In post Adding'); window.location.href='post.php';</script>";
    }
}
else
{
    header('Location:post.php');
}

?>
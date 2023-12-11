<?php
include('config.php');
if(isset($_POST['sub']) == $_POST['txtname'])
{
    $id  = $_POST['txtid'];
    $name = $_POST['txtname'];

    $upd = "update post set pos_name = '$name' where pos_id=$id";
    $res = mysqli_query($con,$upd);

    if($res)
    {
        echo "<script>alert('Post Updated'); window.location.href='post.php';</script>";
    }
    else
    {
        echo "<script>alert('Error Post Not Updated'); window.location.href('post.php');</script>";
    }
}
else
{
    header('Location:post_update_design');
}
?>
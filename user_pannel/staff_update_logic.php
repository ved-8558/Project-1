<?php
include('config.php');

if(isset($_POST['sub']) == $_POST['txtname'])
{
    $id = $_POST['txtid'];
    $name = $_POST['txtname'];
    $doj = $_POST['txtdoj'];
    $add = $_POST['txtadd'];
    $num = $_POST['txtnum'];
    $post = $_POST['txtpost'];

    $upd = "update branch_staff set bs_name = '$name', bs_doj='$doj',
    bs_address='$add',bs_num='$num',bs_post='$post' where bs_id = $id";
    $res = mysqli_query($con,$upd);

    // echo $upd;
    // exit;

    if($res)
    {
        echo "<script>alert('Staff Updated'); window.location.href='staff_detail.php';</script>";
    }
    else
    {
        echo "<script>alert('Staff Not Updated'); window.location.href='staff_detail.php';</script>";
    }
}
else
{
    header('Location:staff_update_design.php');
}
?>
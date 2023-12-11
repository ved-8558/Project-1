<?php
session_start();
include("config.php");

if(isset($_POST['submit']) == $_POST['uname'] && $_POST['pass'])
{
    
$uname = $_POST['uname'];
$pass = $_POST['pass'];

    $ssql = "select * from admin_tbl_user where a_name='$uname' AND a_pass='$pass'";
    $res = mysqli_query($con,$ssql);
    $check = mysqli_num_rows($res);

    if($check > 0)
    { 
    while($row = mysqli_fetch_array($res))
        {
            $_SESSION['ai'] = $row['a_id'];
            $_SESSION['au'] = $row['a_name'];
            
            echo "<script>alert('Successfully Login'); window.location.href='dashboard.php';</script>";
        }  
    }
    else
    {
        echo "<script>alert('Invalid Username/Password'); window.location.href='index.php';</script>";
    } 
}
else
{
    header("Location:index.php");
}
?>
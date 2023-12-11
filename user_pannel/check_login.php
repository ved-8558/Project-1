<?php
session_start();
include("config.php");

if(isset($_POST['submit']) && $_POST['ddlsite'])
{
    
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$site = $_POST['ddlsite'];


    $ssql = "select * from branch_user where b_name='$uname' AND b_pass='$pass' AND b_site='$site'";
    $res = mysqli_query($con,$ssql);
    $check = mysqli_num_rows($res);

    if($check > 0)
    {
        while($row = mysqli_fetch_array($res))
        {
            $_SESSION['bi'] = $row['br_id'];
            $_SESSION['bu'] = $row['b_name'];

            if(!(is_dir("purchase_bill/".$_SESSION['bu'])))
            {
                mkdir("purchase_bill/".$_SESSION['bu']);
            }	

            echo "<script>alert('Successfully Login'); window.location.href='post.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid User Detail'); window.location.href='index.php';</script>";
    }
      
}
else
{
    header("Location:index.php");
}
?>
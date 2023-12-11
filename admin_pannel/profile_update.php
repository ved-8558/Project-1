<?php
session_start();
include('config.php');

if(isset($_POST['sub']))
{
    $name = $_POST['txtuname'];
    $pass = $_POST['txtpass'];
    $id = $_SESSION['ai'];
    $dt = date("Y M d");

    $targetfile="image/".$dt;
	$filename = basename($_FILES["file"]["name"]);
	$targetfilepath = $targetfile . $filename;

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfilepath))
    {
        echo "<script>alert('Photo Uploaded'); window.location.href='profile.php';</script>";
    }
    else
    {
        echo "<script>alert('Photo Not Uploaded'); window.location.href='profile.php';</script>";
    }
	
    $upd = "update admin_tbl_user set a_pass = '$pass', a_image = '$filename' where a_id = '$id'";
    
    if(mysqli_query($con,$upd))
    {
        echo "<script>alert('Updated Data'); window.location.href='profile.php';</script>";
        
    }
    else
    {
        echo "<script>alert('Error While Updating'); window.location.href='profile.php';</script>";
    }

    
}
?>
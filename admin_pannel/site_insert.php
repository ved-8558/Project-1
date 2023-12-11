<?php
session_start();
include("config.php");
if(isset($_POST["sub"]) == $_POST["txtsite"])
{
    $name = $_POST["txtsite"];
    $aid = $_SESSION["ai"];
    $ssql = "insert into site values(null,'$aid','$name')";


    if(mysqli_query($con,$ssql))
    {
        echo "<script>alert('Site Inserted'); window.location.href='site.php'</script>";
    }
    else
    {
        echo "<script>alert('Site Not Inserted'); window.location.href='site.php'</script>";
    }

}
else
{
    header("Location:site.php");
}

?>
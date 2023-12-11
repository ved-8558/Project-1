
<?php
session_start();
include("header.php");



    if($_SESSION!=null){
	unset($_SESSION['mu']);
	session_destroy();
	header('Location:index.php');

    }

                   


include("footer.php");
?>
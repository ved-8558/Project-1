<?php
session_start();
include('config.php');

if(isset($_POST['sub']) && $_POST['txtproduct'] && $_POST['txtsite'] && $_POST['txtparty'] )
{
    $name = $_POST['txtproduct'];
    $site = $_POST['txtsite'];
    $party = $_POST['txtparty'];
    $qt = $_POST['txtqt'];
    $price = $_POST['txtprice'];
    $id = $_SESSION['bi'];
    $name = $_SESSION['bu'];
   // $user = $_SESSION['bu'];
   //  echo $name ."". $site ."". $party ."". $qt ."". $price;
   //  exit;
   $targetfile="purchase_bill/".$name."//";
	$fileName = $id."_".basename($_FILES["vfile"]["name"]);
	$targetFilePath = $targetfile . $fileName;

	// //echo $targetfile;
	// echo $fileName;
	// //echo $targetFilePath;
	// exit();
   
      if(move_uploaded_file($_FILES["vfile"]["tmp_name"],$targetFilePath))
      {
   $ins = "insert into purchase_tbl values (null,$id,'$site','$party','$name',$qt,$price,'$fileName')";
   $res = mysqli_query($con,$ins);

      if($res)
      {
         echo "<script>alert('Purchase Entry Added'); window.location.href='purchase.php';</script>";
      }
      else
      {
         echo "<script>alert('Enter Proper Value'); window.location.href='purchase.php';</script>";
      }
   }
   else
   {
      echo "<script>alert('Upload Bill'); window.location.href='purchase.php';</script>";
   }
}
else
{
   header('Location:purchase.php');
}

?>
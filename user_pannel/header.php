<?php
session_start();
$uname = $_SESSION['bu'];
$id = $_SESSION['bi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gondaliya Construction</title>
	<link href="logo.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	input{
		width: 100%;
		margin-top: 10px;
		border-color: 2px solid black;
	}
</style>
       
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<body>
<div class="row">
	<div class="col-lg-12">
		<nav class="navbar navbar-expand-lg bg-light">
			 <div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
    		</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					 <a class="nav-link active" aria-current="page" href="post.php">Add Post</a>
				</li>
				<li class="nav-item">
					 <a class="nav-link active" href="party.php">Add Party</a>
				</li>
                <li class="nav-item">
                	 <a class="nav-link active" href="product.php">Add Product</a>
                </li>
                <li class="nav-item">
                	 <a class="nav-link active" href="purchase.php">Add Purchase</a>
                </li>
                <li class="nav-item">
                	 <a class="nav-link active" href="staff_detail.php">Add Staff</a>
                </li>
                <li class="nav-item">
                	 <a class="nav-link active" href="used_product.php">Used Product</a>
                </li>
				<li class="nav-item">
                	 <a class="nav-link active" href="stock.php">Stock</a>
                </li>
				<li class="nav-item">
                	 <a class="nav-link active" href="logout.php">Logout</a>
                </li>
			</ul>
			</div>
			<div>
				<h3 style="margin-right: 30px;">
					<?php echo $uname; ?>
				</h3>
			</div>
		</div>
		</nav>
	</div>
</div> 
<?php
include("config.php");
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gondaliya Construction - Login</title>
    <link href="logo.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<script>
    function vcheck()
    {
        var name = document.getElementById("uname").value;
        var pass = document.getElementById("pass").value;

        if(name == "" || pass == "")
        {
            alert("Fill Username and Password");
        }
    }
</script> 
 <body style="background:linear-gradient(to right,#95fff6 , #fdc5f1)">
<!-- style="background-image: url('i2.jpg');
    background-size:cover;
    background-repeat:no-repeat;" -->
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div>
            </div>
        </div>
        <div class="col-lg-6 card-body">
            <form action="check_login.php" method="post">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Admin Login</h3></div><br>
           <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" name="uname" id="uname" autocomplete="off">
           </div>
           <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="pass" id="pass" autocomplete="off">
           </div>
           <div class="mb-3">
            <input type="submit" onclick="vcheck()" class="btn btn-danger" name="submit" value="Submit">
           </div>
           </form>
        </div>
        <div class="col-lg-3">
            <div>
            </div>
        </div>
    </div>
</body>
</html>
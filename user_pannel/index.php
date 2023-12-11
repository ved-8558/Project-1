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
    function checku()
    {
        var name = document.getElementById("uname").value;
        var pass = document.getElementById("pass").value;
        var ddl = document.getElementById("ddlsite");

        if(name == "")
        {
          alert("Username Complusory");
          return false;
        }
        if(pass == "")
        {
          alert("Password Complusory");
          return false;
        }
        if(ddl.value == "")
        {
          alert("Select Site !!");
          return false;
        }

    }
</script>
<body  style="background:linear-gradient(to right,#7F7FD5 , #91EAE4);">
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div>
            </div>
        </div>
        <div class="col-lg-6 card-body">
            <form action="check_login.php" method="post">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Branch User</h3></div><br>
           <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" required class="form-control" name="uname" id="uname" autocomplete="off">
           </div>
           <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" required class="form-control" name="pass" id="pass" autocomplete="off">
           </div>
           <div class="mb-3">
                <select id="ddlsite" name="ddlsite">
                    <option value="">--- Select Your Site ---</option>
           <?php
            $ssql = "select * from site";
            $res = mysqli_query($con,$ssql);
            while($row = mysqli_fetch_array($res))
            {
           ?>           
                <option value="<?php echo $row['s_name'];?>"><?php echo $row['s_name'];?></option>
            <?php
             }
             ?>
              </select>
           </div>
           <div class="mb-3">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" onclick="checku()">
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
<?php
           //session_start();
           include_once('config.php');
          include('header.php');

          if($_SESSION == null)
          {
          //  header('Location:http://localhost:81/construction_site/admin_pannel/index.php');
          echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
          }
           ?>
           
<script>
    function checku()
    {
        var name = document.getElementById("txtname").value;
        var pass = document.getElementById("txtpass").value;
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
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5"  style="margin-top:112px;">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                    <div class="card-body">
                     <form action="add_user_insert.php" method="post">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtname" name="txtname" type="text" placeholder="User Name" autocomplete="off" />
                        <label for="User">UserName</label>
                      
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtpass" name="txtpass" type="password" placeholder="Password" autocomplete="off" />
                        <label for="Password">Password</label>
                      </div>

                      </div>
                      <div class="mb-3">
<select id="ddlsite" name="ddlsite">
<option value="">---- Select Site ----</option>

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

                      <input style="margin-top: 15px;" onclick="checku()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12" style="margin-top:10px;">
			<table class="table table-striped table-dark table-hover">
				<tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Date</th>
                </tr>

                        <?php   
                        $ssql="SELECT * FROM branch_user";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                    

                          <tr>
                            <th><?php echo $raw['br_id']; ?></th>
                            <th><?php echo $raw['b_name']; ?></th>
					                  <th><?php echo $raw['b_pass']; ?></th>
                            <th><?php echo $raw['b_date']; ?></th>
                            </td>
                         </tr>

                          <?php 
                        }
                        ?>
                      </table>
                    </div>                     
                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

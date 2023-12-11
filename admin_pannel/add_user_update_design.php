<?php
           //session_start();
           include_once('config.php');
          include('header.php');

          if($_SESSION == null)
          {
          echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
          }
          
          $id = $_GET['id'];
         
        $ssql = "select * from branch_user where br_id = '$id'";

        $res = mysqli_query($con,$ssql);
        $row = mysqli_fetch_row($res);
           ?>
           
<script>
    function checku()
    {
        var name = document.getElementById("txtname").value;
        var pass = document.getElementById("txtpass").value;
        if(name == "" && pass == "")
        {
            alert("Username and Password Complusory");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update User Data</h3></div>
                    <div class="card-body">
                     <form action="add_user_update_logic.php" method="post">

                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" type="text" value="<?php echo $row[0]; ?>" />
                        <label for="id">id</label>
                      </div>   

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtname" name="txtname" type="text" value="<?php echo $row[2]; ?>" />
                        <label for="User">UserName</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtpass" name="txtpass" type="text" value="<?php echo $row[3]; ?>" />
                        <label for="Password">Password</label>
                      </div>

                      <input style="margin-top: 15px;" onclick="checku()" class="btn btn-primary" type="submit" name="sub" value="Update">
                    </form>

                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

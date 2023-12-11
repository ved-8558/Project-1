<?php
           // session_start();
           include_once('config.php');
           include('header.php');

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $id = $_GET['id'];

           $ssql = "select * from branch_staff where bs_id=$id";
           $res = mysqli_query($con,$ssql);
           $row = mysqli_fetch_array($res);
           ?>
           
<script>
   function checks()
    {
        var name = document.getElementById("txtname").value;
        var qt = document.getElementById("txtdoj").value;
        var code = document.getElementById("txtadd").value;
        var price = document.getElementById("txtnum").value;

        if(name == "" && qt == "" && code == "" && price == "")
        {
            alert("Enter Value!!!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Staff Data</h3></div>
                    <div class="card-body">
                     <form action="staff_update_logic.php" method="post">

                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" value="<?php echo $row[0]; ?>" placeholder="Staff name" />
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtname" name="txtname" type="text" value="<?php echo $row['bs_name']; ?>" placeholder="Staff name" />
                        <label for="Staff name">Staff name</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtdoj" name="txtdoj" type="DATE" value="<?php echo $row['bs_doj']; ?>" placeholder="Date of birth" />
                        <label for="Date of birth">Date of birth</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtadd" name="txtadd" type="text" value="<?php echo $row['bs_address']; ?>" placeholder="Address" />
                        <label for="Address">Address</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtnum" name="txtnum" type="text" value="<?php echo $row['bs_num']; ?>" placeholder="Number" />
                        <label for="Number">Number</label>
                      </div>

                      <div class="form-floating mb-3">
                       <select name="txtpost" id="txtpost">
                       <option>--- Select Post ---</option>

                        <?php
                        
                        $ssql = "select * from post";
                        $res = mysqli_query($con,$ssql);
                        $row = mysqli_fetch_array($res);
                        ?>

                        <option value="<?php echo $row['pos_name']; ?>"><?php  echo $row['pos_name'];?></option>
                       </select>
                      </div>

                      <input style="margin-top: 15px;" onclick="checks()" class="btn btn-primary" type="submit" name="sub" value="Update">
                    </form>
                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

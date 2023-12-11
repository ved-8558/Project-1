<?php
          //session_start();
           include_once('config.php');
           include('header.php');
           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $id = $_GET['id']; 
           $ssql = "select * from party_tbl where par_id = $id";
           $res = mysqli_query($con,$ssql);
           $row = mysqli_fetch_array($res); 
           ?>
           
<script>
    function partycheck()
    {
        var name = document.getElementById("txtpar").value;

        if(name == "")
        {
            alert("Enter Party Name!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Party Name</h3></div>
                    <div class="card-body">
                     <form action="party_update_logic.php" method="post">
                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" type="text" value="<?php echo $row[0]; ?>"/>
                        <label for="Party">Update Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtpar" name="txtpar" type="text" value="<?php echo $row['par_name']; ?>" placeholder="Party Name" />
                        <label for="Party">Update Name</label>
                      </div>

                      <input style="margin-top: 15px;" onclick="partycheck()" class="btn btn-primary" type="submit" name="sub" value="Update">
                    </form>                     
                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

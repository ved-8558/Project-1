<?php
          // session_start();
           include_once('config.php');
           include('header.php');

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $id = $_GET['id'];
           $ssql = "select * from site where s_id=$id";
           $res = mysqli_query($con,$ssql);
           $row = mysqli_fetch_array($res);

           ?>
           
<script>
    function checks()
    {
        var name = document.getElementById("txtsite").value;

        if(name == "")
        {
            alert("Enter Site!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5" style="margin-top:112px;">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Sites</h3></div>
                    <div class="card-body">
                     <form action="site_update_logic.php" method="post">
                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" type="text" value="<?php echo $row[0]; ?>" />
                        <label for="Site">Site Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtsite" name="txtsite" type="text" placeholder="Site Name" value="<?php echo $row['s_name']; ?>" />
                        <label for="Site">Site Name</label>
                      </div>
                      <input style="margin-top: 15px;" onclick="checks()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>

                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

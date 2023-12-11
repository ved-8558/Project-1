<?php
           //session_start();
           include_once('config.php');
           include('header.php');
           $id = $_GET['id'];

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }
          
           $ssql = "select * from product_tbl where pro_id = $id";
           $res = mysqli_query($con,$ssql);
           $row = mysqli_fetch_array($res);
           ?>
           
<script>
    function uchecks()
    {
        var name = document.getElementById("txtname").value;

        if(name == "")
        {
            alert("Enter Product Name To Update!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Product</h3></div>
                    <div class="card-body">
                     <form action="product_update_logic.php" method="post">
                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" type="text" value="<?php echo $row[0]; ?>" />
                        <label for="Product">Update Product</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtname" name="txtname" type="text"  value="<?php echo $row['pro_name']; ?>" placeholder="Product Name" />
                        <label for="Product">Update Product</label>
                      </div>
                      <input style="margin-top: 15px;" onclick="uchecks()" class="btn btn-primary" type="submit" name="sub" value="Update">
                    </form>
                </div>
              </div>
            </div>
          </div>
        </main>




        <?php
        include('footer.php');
        ?>

<?php
          // session_start();
           include_once('config.php');
           include('header.php');

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $uid =$_GET['id'];
           $ssql = "select * from used_product where up_id = $uid";
           $res = mysqli_query($con,$ssql);
           $raw = mysqli_fetch_array($res);
           ?>   
<script>
   function checks()
    {
        var name = document.getElementById("txtname").value;
        var qt = document.getElementById("txtqt").value;
        if(qt == "")
        {
            alert("Enter Value!!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Used Product</h3></div>
                    <div class="card-body">
                     <form action="used_update_logic.php" method="post">

                     <div class="form-floating mb-3">
                        <input class="form-control" hidden="hidden" id="txtid" name="txtid" type="text" value="<?php echo $raw['up_id'];?>" />
                      </div> 

                      <div class="form-floating mb-3">
                       <select name="txtname" id="txtname">
                       <option>--- Update Product ---</option>
                       <?php
                        $ssql = "select * from product_tbl"; 
                        $res = mysqli_query($con,$ssql);
                        $row = mysqli_fetch_array($res);  
                       ?>
                        <option value="<?php echo $row['pro_name']; ?>"><?php echo $row['pro_name']; ?></option>
                       </select>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtqt" name="txtqt" type="text" placeholder="Product Quantity"  value="<?php echo $raw['up_quantity'];?>" />
                        <label for="Product Quantity">Update Product Quantity</label>
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

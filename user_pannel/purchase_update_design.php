<?php
   //session_start();
   include_once('config.php');
   include('header.php');
   if($_SESSION == null)
   {
   echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
   }
   
   $branch_id = $_SESSION['bi'];
   $idv = $_GET['id'];

   $ssql = "select * from purchase_tbl where p_id = $idv";
   $res = mysqli_query($con,$ssql);
   $vrow = mysqli_fetch_array($res);
?>
<script>
   function purchecks()
    {
        var pro = document.getElementById("txtproduct").value;
        var site = document.getElementById("txtsite").value;
        var party = document.getElementById("txtparty").value;
        var price = document.getElementById("txtprice").value;
        var qt = document.getElementById("txtqt").value;
   
        if(price == "" && qt == "")
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
            <div class="card-header">
               <h3 class="text-center font-weight-light my-4">Update Purchase</h3>
            </div>
            <div class="card-body">
               <form action="purchase_update_logic.php" method="post" enctype="multipart/form-data">
                  <input type="text" hidden="hidden" id="txtid" name="txtid" value="<?php echo $vrow[0]; ?>">
                  <div class="form-floating mb-3">
                  <select name="txtproduct" id="txtproduct">
                        <option>--- Select Product ---</option>
                    <?php
                      $ssql = "select * from product_tbl where br_id=$branch_id";
                      $res = mysqli_query($con,$ssql);
                      while($row = mysqli_fetch_array($res))
                      {
            
                    ?>
                        <option value="<?php echo $row['pro_name']; ?>"><?php echo $row['pro_name']; ?></option>
                     <?php
                     }
                     ?>
                     </select>
                  </div>
                  <div class="form-floating mb-3">
                     <select name="txtsite" id="txtsite">
                        <option>------ Select Site ------</option>
                        <?php
                        $ssql = "select * from site where br_id=$branch_id";
                        $res = mysqli_query($con,$ssql);
                        while($row = mysqli_fetch_array($res))
                        {
                        ?>
                        <option value="<?php echo $row['s_name'];  ?>"><?php echo $row['s_name'];  ?></option>
                        <?php 
                        }
                        ?>
                     </select>
                  </div>
                  <div class="form-floating mb-3">
                     <select name="txtparty" id="txtparty">
                        <option>------ Select Party ------</option>
                        <?php 
                        $ssql = "select * from party_tbl where br_id=$branch_id";
                        $res = mysqli_query($con,$ssql);
                        while($row = mysqli_fetch_array($res))
                        {
                        ?>
                        <option value="<?php echo $row['par_name']; ?>"><?php echo $row['par_name']; ?></option>
                        <?php
                        }
                        ?>
                     </select>
                  </div>
                  <div class="form-floating mb-3">
                     <?php
                           $ssql = "select * from purchase_tbl where p_id = $idv";
                           $res = mysqli_query($con,$ssql);
                           $rowv = mysqli_fetch_array($res);                        
                     ?>
                     <input class="form-control" id="txtqt" name="txtqt" type="text" value="<?php echo $rowv[5]; ?>" placeholder="Product Quantity" />
                     <label for="Product Quantity">Product Quantity</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input class="form-control" id="txtprice" name="txtprice" value="<?php echo $rowv[6]; ?>" type="text" placeholder="Product price" autocomplete="off" />
                     <label for="Product price">Product price</label>
                  </div>
                  <div class="form-floating mb-3">
                     Upload Bill :
                     <input class="form-control"  type="file" id="gfile" name="gfile" value="Upload Bill"/>
                  </div>
                  <input style="margin-top: 15px;" onclick="purchecks()" class="btn btn-primary" type="submit" name="sub" value="Add">
               </form>
            </div>
         </div>
      </div>
   </div>
</main>
<?php
   include('footer.php');
   ?>
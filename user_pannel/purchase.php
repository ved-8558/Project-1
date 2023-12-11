<?php
 //  session_start();
   include_once('config.php');
   include('header.php');

   if($_SESSION == null)
   {
   echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
   }
   
   $ssql = "select * from product_tbl";
   $res = mysqli_query($con,$ssql);
   $row = mysqli_fetch_array($res);
   $id = $_SESSION['bi'];
   ?>

<script>
   function fun()
   {
      var product = document.getElementById("txtproduct");
      var site = document.getElementById("txtsite");
      var party = document.getElementById("txtparty");

      if(product.value == "")
      {
         alert("Enter Product");
         return false;
      }
      if(site.value == "")
      {
         alert("Enter Site");
         return false;
      }
      if(party.value == "")
      {
         alert("Enter Party");
         return false;
      }
   }
</script>
<main>
  <div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-5">
         <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
               <h3 class="text-center font-weight-light my-4">Purchase</h3>
            </div>
            <div class="card-body">
               <form action="purchase_insert.php" method="post" enctype="multipart/form-data">
                  <div class="form-floating mb-3">
                  <select name="txtproduct" id="txtproduct">
                        <option value="">--- Select Product ---</option>
                    <?php
                      $ssql = "select * from product_tbl where br_id = $id";
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
                        <option value="">------ Select Site ------</option>
                        <?php
                        $ssql = "select * from site";
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
                        <option value="">------ Select Party ------</option>
                        <?php 
                        $ssql = "select * from party_tbl where br_id = $id";
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
                     <input class="form-control" required id="txtqt" name="txtqt" type="number" placeholder="Product Quantity" />
                     <label for="Product Quantity">Product Quantity</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input class="form-control" required id="txtprice" name="txtprice" type="number" placeholder="Product price" autocomplete="off" />
                     <label for="Product price">Product price</label>
                  </div>

                  <div class="form-floating mb-3">
                     Upload Bill :
                     <input class="form-control"  type="file" id="vfile" name="vfile" value="Upload Bill"/>
                  </div>
                  
                  <input style="margin-top: 15px;" class="btn btn-primary" type="submit" onclick="fun()" name="sub" value="Add">
               </form>
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-12">
                        <table class="table table-striped table-dark table-hover">
                           <tr>
                              <th>Product Name</th>
                              <th>Site Name</th>
                              <th>Party Name</th>
                              <th>Product Quantity</th>
                              <th>Product Price</th>
                              <th>Bills</th>
                              <th>Action</th>
                           </tr>
                           <?php  
                              $ssql="SELECT * FROM purchase_tbl where br_id = $id";
                              $res=mysqli_query($con,$ssql);
                              while($raw=mysqli_fetch_array($res))
                              {
                                ?>
                           <tr>
                              <th><?php echo $raw['p_name']; ?></th>
                              <th><?php echo $raw['site_name']; ?></th>
                              <th><?php echo $raw['party_name']; ?></th>
                              <th><?php echo $raw['p_quantity']; ?></th>
                              <th><?php echo $raw['p_price']; ?></th>
                              <th><?php echo $raw['p_bill']; ?></th>
                              <td><a href="purchase_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                                 <a href="purchase_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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
   </div>
</main>
<?php
   include('footer.php');
   ?>
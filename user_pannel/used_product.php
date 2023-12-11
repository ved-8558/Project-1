<?php
          // session_start();
           include_once('config.php');
           include('header.php');
           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           //$bid = $_SESSION['bi'];
         
           ?>   
<script>
   function checks()
    {
        var name = document.getElementById("txtname").value;
        var qt = document.getElementById("txtqt").value;
        if(qt == "")
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Used Product</h3></div>
                    <div class="card-body">
                     <form action="used_product_insert.php" method="post">
                      <div class="form-floating mb-3">
                       <select name="txtname" id="txtname">
                       <option>--- Select Product ---</option>
                       <?php
                          $ssql = "select * from product_tbl";
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
                        <input class="form-control" id="txtqt" name="txtqt" type="text" placeholder="Product Quantity" />
                        <label for="Product Quantity">Product Quantity</label>
                      </div>                 

                      <input style="margin-top: 15px;" onclick="checks()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12">
			<table class="table table-striped table-dark table-hover">
				        <tr>
                    <th>Used Product Name</th>
                    <th>Used Product Quantity</th>
                    <th>Action</th>
                </tr>
                        <?php  
                        $bid = $_SESSION['bi'];
                        $ssql="SELECT * FROM used_product where br_id = $bid ";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                          
                          <tr>
					                  <th><?php echo $raw['up_name']; ?></th>
                            <th><?php echo $raw['up_quantity']; ?></th>
                            <td><a href="used_product_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                              <a href="used_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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

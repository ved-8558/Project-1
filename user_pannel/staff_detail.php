<?php
           // session_start();
           include_once('config.php');
           include('header.php');
           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $bid = $_SESSION['bi'];
           ?>
           
<script>
   function checks()
    {
        var name = document.getElementById("txtname").value;
        var qt = document.getElementById("txtdoj").value;
        var code = document.getElementById("txtadd").value;
        var price = document.getElementById("txtnum").value;
        var post = document.getElementById("txtpost");

        if(name == "" && qt == "" && code == "" && price == "")
        {
            alert("Enter Value!!!!");
            return false;
        }
        if(post.value == "")
        {
          alert("Enter Post");
          return false;
        }
    }
   
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Staff</h3></div>
                    <div class="card-body">
                     <form action="staff_detail_insert.php" method="post">

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtname" name="txtname" type="text" placeholder="Staff name"/>
                        <label for="Staff name">Staff name</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtdoj" name="txtdoj" type="date" placeholder="Date of birth" />
                        <label for="Date of birth">Date of birth</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtadd" name="txtadd" type="text" placeholder="Address" />
                        <label for="Address">Address</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtnum" name="txtnum" type="text" placeholder="Number" />
                        <label for="Number">Number</label>
                      </div>

                      <div class="form-floating mb-3">
                       <select name="txtpost" id="txtpost">
                       <option value="">--- Select Post ---</option>
                       <?php
                             $ssql = "select * from post where br_id=$bid";
                             $res = mysqli_query($con,$ssql);
                             

                             while($row = mysqli_fetch_array($res))
                             {
                        ?>
                        <option value="<?php echo $row['pos_name']; ?>"><?php  echo $row['pos_name'];?></option>
                        <?php
                        }
                        ?>
                       </select>
                      </div>

                      <input style="margin-top: 15px;" onclick="checks()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12">
			<table class="table table-striped table-dark table-hover">
				        <tr>
                    <th>Name</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Post</th>
                    <th>Action</th>
                </tr>

                        <?php  
                        $ssql="SELECT * FROM branch_staff where br_id = $bid";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>

                          <tr>
					                  <th><?php echo $raw['bs_name']; ?></th>
                            <th><?php echo $raw['bs_doj']; ?></th>
                            <th><?php echo $raw['bs_address']; ?></th>
                            <th><?php echo $raw['bs_num']; ?></th>
                            <th><?php echo $raw['bs_post'] ?></th>
                            <td><a href="staff_detail_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                              <a href="staff_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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

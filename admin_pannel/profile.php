<?php
           //session_start();
           include_once('config.php');
           include('header.php');

           $id = $_SESSION['ai'];

           $sel = "select * from admin_tbl_user where a_id = $id";
           $res = mysqli_query($con,$sel);
           $row = mysqli_fetch_array($res);
           

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }
           ?>
           
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5" style="margin-top:112px;">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">My Profile</h3></div>
                    <div class="card-body">
                     <form action="profile_update.php" method="post" enctype="multipart/form-data">

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtuname" name="txtuname"  type="text" value="<?php echo $row['a_name']; ?>" placeholder="UserName" readonly />
                        <label for="Site">Username</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" required id="txtpass" name="txtpass" type="text" value="<?php echo $row['a_pass']; ?>" placeholder="Password" autocomplete="off" />
                        <label for="Site">Password</label>
                      </div>

                      <div>
                        <input class="form-control" id="file" name="file" type="file" placeholder="Upload Image" required />
                        <label for="file"></label>
                      </div>

                      <input style="margin-top: 15px;" class="btn btn-primary" type="submit" name="sub" value="Update">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12" style="margin-top:10px;">
			<table class="table table-striped table-dark table-hover">
				        <tr>
                    <th>Profile Image</th>
                </tr>

                        <?php   
                        $dt = date("Y M d");
                        $ssql="SELECT * FROM admin_tbl_user";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                    
                          <tr>
                            <td>
                              <img src="<?php echo "image/"."/".$dt.$raw['a_image'];?>"  width="100" height="100" border="2"/>
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

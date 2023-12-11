<?php
           //session_start();
           include_once('config.php');
           include('header.php');

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }
           ?>
           
<script>
    function sitecheck()
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Sites</h3></div>
                    <div class="card-body">
                     <form action="site_insert.php" method="post">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtsite" name="txtsite" type="text" placeholder="Site Name" />
                        <label for="Site">Site Name</label>
                      </div>

                      <input style="margin-top: 15px;" onclick="sitecheck()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12" style="margin-top:10px;">
			<table class="table table-striped table-dark table-hover">
				<tr>
                    <th>Site-Name</th>
                    <th>Action</th>
                </tr>

                        <?php   
                        $ssql="SELECT * FROM site";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                          <tr>
					        <th><?php echo $raw['s_name']; ?></th>
                            <td><a href="site_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                              <a href="site_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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

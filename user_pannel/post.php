<?php
           //session_start();
           include_once('config.php');
           include('header.php');

           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }

           $ssql = "select * from product_tbl";
           $res = mysqli_query($con,$ssql);
           $row = mysqli_fetch_array($res);
           ?>
           
<script>
   function checks()
    {
        var name = document.getElementById("txtpost").value;
       
        if(name == "")
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
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Post</h3></div>
                    <div class="card-body">
                     <form action="post_insert.php" method="post">
                     
                     <div class="form-floating mb-3">
                        <input class="form-control" id="txtpost" name="txtpost" type="text" placeholder="Enter Post" />
                        <label for="Enter Post">Enter Post</label>
                      </div>                     

                      <input style="margin-top: 15px;" onclick="checks()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                      
<div class="col-lg-12">
			<table class="table table-striped table-dark table-hover">
				<tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                        <?php  
                        $bid = $_SESSION['bi'];
                        $ssql="SELECT * FROM post where br_id = $bid";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                    

                          <tr>
					        <th><?php echo $raw['pos_name']; ?></th>
                            <td><a href="post_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                              <a href="post_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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
        </main>




        <?php
        include('footer.php');
        ?>

<?php
           // session_start();
           include_once('config.php');
           include('header.php');
           if($_SESSION == null)
           {
           echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
           }
           ?>
           
<script>
    function partycheck()
    {
        var name = document.getElementById("txtpar").value;

        if(name == "")
        {
            alert("Enter Party Name!!");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Party Name</h3></div>
                    <div class="card-body">
                     <form action="party_insert.php" method="post">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtpar" name="txtpar" type="text" placeholder="Party Name" />
                        <label for="Party">Party Name</label>
                      </div>

                      <input style="margin-top: 15px;" onclick="partycheck()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                    <div class="card-body">                     
                    
<div class="col-lg-12">
			<table class="table table-striped table-dark table-hover">
				<tr>
                    <th>Party-Name</th>
                    <th>Action</th>
                </tr>

                        <?php   
                         $bid = $_SESSION['bi'];
                        $ssql="SELECT * FROM party_tbl where br_id = $bid";
                        $res=mysqli_query($con,$ssql);
                        while($raw=mysqli_fetch_array($res))
                        {
                          ?>
                          <tr>
					        <th><?php echo $raw['par_name']; ?></th>
                            <td><a href="party_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                              <a href="party_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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

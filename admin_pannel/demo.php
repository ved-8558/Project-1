<?php
           //session_start();
           include_once('config.php');
          include('header.php');
           ?>
           
<script>
    function checku()
    {
        var name = document.getElementById("txtname").value;
        var pass = document.getElementById("txtpass").value;
        if(name == "" && pass == "")
        {
            alert("Username and Password Complusory");
        }
    }
</script>
           <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                    <div class="card-body">
                     <form action="add_user_insert.php" method="post">
                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtname" name="txtname" type="text" placeholder="User Name" autocomplete="off" />
                        <label for="User">UserName</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input class="form-control" id="txtpass" name="txtpass" type="password" placeholder="Password" autocomplete="off" />
                        <label for="Password">Password</label>
                      </div>

                      <input style="margin-top: 15px;" onclick="checku()" class="btn btn-primary" type="submit" name="sub" value="Add">
                    </form>
                                      
<div class="row">                 
<div class="col-lg-6">
  <table class="table table-hover">
    <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

                    <?php   
                    $ssql="SELECT * FROM branch_user";
                    $res=mysqli_query($con,$ssql);
                    while($raw=mysqli_fetch_array($res))
                    {
                      ?>
                

                      <tr>
                        <th><?php echo $raw['br_id']; ?></th>
                        <th><?php echo $raw['b_name']; ?></th>
              <th><?php echo $raw['b_pass']; ?></th>
                        <th><?php echo $raw['b_date']; ?></th>
                        <td><a href="add_user_delete.php?id=<?php echo $raw[0];?>">Delete</a>
                          <a href="add_user_update_design.php?id=<?php echo $raw[0];?>">Update</a>
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

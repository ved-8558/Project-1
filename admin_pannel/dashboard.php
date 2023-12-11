<?php
include('config.php');
include('header.php')
?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- User Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Users :</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-person"></i>
                    </div>
                    <div class="ps-3">
                    <?php
                        $sql = "select count(br_id) from branch_user";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);                      
                    ?>
                      <h6><?php  echo $row['count(br_id)']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End User Card -->

            <!-- Site Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Sites :</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-text"></i>
                    </div>
                    <?php
                        $sql = "select count(s_id) from site";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);                      
                    ?>
                    <div class="ps-3">
                      <h6><?php  echo $row['count(s_id)']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Site Card -->

            <!-- Staff Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Staff :</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-person-fill"></i>
                    </div>
                    <?php
                        $sql = "select count(bs_id) from branch_staff";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);                      
                    ?>
                    <div class="ps-3">
                      <h6><?php  echo $row['count(bs_id)']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Staff Card -->

            <!-- party Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Party :</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-justify"></i>
                    </div>
                    <?php
                        $sql = "select count(par_id) from party_tbl";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);                      
                    ?>
                    <div class="ps-3">
                      <h6><?php  echo $row['count(par_id)']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End party Card -->

             <!-- Items Card -->
             <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Product :</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <?php
                        $sql = "select count(pro_name) from product_tbl";
                        $res = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($res);                      
                    ?>
                    <div class="ps-3">
                      <h6><?php  echo $row['count(pro_name)']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Items Card -->


           

            

          

          </div>
        </div>

      </div>
    </section>

  </main>


</body>

</html>

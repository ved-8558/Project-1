<?php
//session_start();
include('config.php');
include('header.php');
$bid = $_SESSION['bi'];
if($_SESSION == null)
{
echo "<script>alert('Access Denied'); window.location.href='index.php';</script>";
}
?>

<main>
            <div class="container">
              <div class="row justify-content-center">
                
<div class="col-lg-12">
			<table class="table table-striped table-dark table-hover">
				        <tr>
                    <th>Site Name</th>
                    <th>Party Name</th>
                    <th>Product Name</th>
                    <th>Purchase Quantity</th>
                    <th>Used</th>
                    <th>In Stock</th>
                </tr>

                <?php  
                      $ssql = "SELECT purchase_tbl.site_name,purchase_tbl.party_name,
                      purchase_tbl.p_name,purchase_tbl.p_quantity,used_product.up_quantity,
                      branch_user.b_name,branch_user.b_site from branch_user 
                      JOIN purchase_tbl ON purchase_tbl.br_id = branch_user.br_id
                      JOIN used_product ON used_product.br_id = branch_user.br_id
                      WHERE branch_user.br_id = $bid;";
                      
                      $res = mysqli_query($con,$ssql);
                        while($row = mysqli_fetch_array($res))
                        {
                            $site = $row['site_name'];
                            $party = $row['party_name'];
                            $product = $row['p_name'];
                            $pur = $row['p_quantity'];
                            $used = $row['up_quantity'];
                            $stock = $pur - $used;
                          ?>

                <tr>
                    <td><?php echo $site; ?></td>
                    <td><?php echo $party; ?></td>
                    <td><?php echo $product; ?></td>
                    <td><?php echo $pur; ?></td>
                    <td><?php echo $used; ?></td>
                    <td><?php echo $stock; ?></td>
                </tr>
                    <?php
                        }
                    ?>
            </table>

              </div>
            </div>
          
        </main>

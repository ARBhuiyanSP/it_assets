<?php include('header.php');
$id=$_GET['id'];
 ?>

			
		


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Products View</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
								<?php
								$sql	=	"select * from ams_products where id=$id";
								$result = mysqli_query($link, $sql);
								$row=mysqli_fetch_array($result);
								?>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10" id="printableArea" style="display:block;">
								<table width='100%'>				
									<tr>
										<td style="text-align:center">
											<div class="headbody">
												<h1 align="center"><img src="images/blc-logo.png" width="162" height=""></h1>
												<h2 align="center">SAIF POWER GROUP</h2>
												<p align="center">Rupayan Centre(8th Floor),72, Mohakhali C/A,Dhaka-1212,Bangladesh</p>
												<h3 align="center">Assets Details</h3>
												<h1 align="center"><img src="<?php echo $row['qr_image'] ?>" height="200" /></h1>
											</div>
										</td>
									</tr>
								</table>
								<table class="table table-bordered">
									<tr>
										<th>Product Photo:</th>
										<td><img src="products_photo/<?php echo $row['pro_photo'] ?>" height="150" /></td>
									</tr>
									<tr>
										<th>Item Name:</th>
										<td><?php echo $row['item_name'] ?></td>
									</tr>
									<tr>
										<th>Brand:</th>
										<td><?php echo $row['brand'] ?></td>
									</tr>
									<tr>
										<th>Model:</th>
										<td><?php echo $row['model'] ?></td>
									</tr>
									<tr>
										<th>Description:</th>
										<td><?php echo $row['assets_description'] ?></td>
									</tr>
									<tr>
										<th>RLP No:</th>
										<td><?php echo $row['rlp_no'] ?></td>
									</tr>
									<tr>
										<th>Country Origin:</th>
										<td><?php echo $row['origin'] ?></td>
									</tr>
									<tr>
										<th>Vendor Name:</th>
											<?php 
												$vendor_id = $row['vendor_name'];
												$sqlvendor	= "select * from `vendors` where `vendor_id`='$vendor_id'";
												$resultvendor = mysqli_query($link, $sqlvendor);
												$rowvendor=mysqli_fetch_array($resultvendor);
											?>
										<td><?php echo $rowvendor['vendor_name']; ?></td>
									</tr>
									<tr>
										<th>Purchase Date:</th>
										<td><?php echo $row['puchase_date']; ?></td>
									</tr>
									<tr>
										<th>Custody:</th>
										<td><?php echo $row['custody']; ?></td>
									</tr>
									<tr>
										<th>User:</th>
											<?php if($row['assign_status']=='assigned'){ 
											$products_id	=	$row['id'];
												$sqlassign	= "select * FROM `product_assign` WHERE `product_id`='$products_id' ORDER BY `id` DESC LIMIT 1 ";
												$resultassign = mysqli_query($link, $sqlassign);
												$rowassign=mysqli_fetch_array($resultassign);
												
													$employee_id = $rowassign['employee_id'];
													$sqlemployee	= "select * from `employees` where `employee_id`='$employee_id'";
													$resultemployee = mysqli_query($link, $sqlemployee);
													$rowemployee=mysqli_fetch_array($resultemployee);
											?>
										<td><?php echo $rowassign['employee_id']; ?> || <?php echo $rowemployee["employee_name"]; ?> || <?php echo $rowemployee["division"]; ?>-<?php echo $rowemployee["department"]; ?></td>
											<?php }else{ ?>
										<td>---</td>
										<?php } ?>
									</tr>
								</table>
							</div>
                            <div class="col-sm-1"></div>
						</div>
						<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
							
							<script>
							function printDiv(divName) {
								 var printContents = document.getElementById(divName).innerHTML;
								 var originalContents = document.body.innerHTML;

								 document.body.innerHTML = printContents;

								 window.print();

								 document.body.innerHTML = originalContents;
							}
							</script>
							<button class="btn btn-default" onclick="window.location.href = 'products_list.php'"><i class="fa fa-hand-o-right" aria-hidden="true" style="  font-size: 17px;"> Back To Products List</i></button>
                    </div> <!-- container -->
                    </div> <!-- container -->
					

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec Ltd</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>


		
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>



        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		

    </body>
</html>

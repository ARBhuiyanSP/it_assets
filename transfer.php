<?php include('header.php');
?>
            <!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			
			
		<link href="plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content it_bg">
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
							$id = $_GET['id'];
							$sql	=	"select * from ams_products where id=$id";
							$result = mysqli_query($link, $sql);
							$row=mysqli_fetch_array($result);
							?>
                            <div class="col-lg-4">
								<table style="" class="table table-bordered">
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
										<th>RLP No:</th>
										<td><?php echo $row['rlp_no'] ?></td>
									</tr>
									<tr>
										<th>Country Origin:</th>
										<td><?php echo $row['origin'] ?></td>
									</tr>
									<tr>
										<th>Vendor Name:</th>
										<td><?php echo $row['vendor_name'] ?></td>
									</tr>
									<tr>
										<th>Purchase Date:</th>
										<td><?php echo $row['puchase_date'] ?></td>
									</tr>
									<tr>
										<th>Custody:</th>
										<td><?php echo $row['custody'] ?></td>
									</tr>
								</table>
							</div>
                            <div class="col-lg-8">
								<h3>Scan Below Code</h3>
								<img src="<?php echo $row['qr_image'] ?>" height="250" />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2">
								<div class="form-group">
									<?php 
										$product_id= $row['id'];
										$sql2	= "SELECT * FROM product_assign WHERE product_id=$product_id ORDER BY id DESC LIMIT 1 ;";
										$result2 = mysqli_query($link, $sql2);
										$row2=mysqli_fetch_array($result2);
										?>
									<label>Assign To</label>
									<?php 
									$employee_id=$row2['employee_id'];
									$sql3	= "SELECT * FROM `employees` WHERE `employee_id`='$employee_id' ;";
									$result3 = mysqli_query($link, $sql3);
									$row3=mysqli_fetch_array($result3);
									?>
									<input name="employee_id" type="text" class="form-control" id="" value="<?php echo $row3['employee_name'] ?>" readonly />
								</div>
							</div>
							<div class="col-xs-2">
								<div class="form-group">
									<label>Assign Date</label>
									<input name="assign_date" type="text" class="form-control" id="" value="<?php echo $row2['assign_date'] ?>" readonly />
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label>Remarks</label>
									<input name="remarks" type="text" class="form-control" id="" value="<?php echo $row2['remarks'] ?>" readonly />
								</div>
							</div>
						</div>
						<h3 style="color:red;">Want To Transfer This Product ?</h3>
						<form action="movetotransfer.php" method="post">
							<div class="row">
								<div class="col-xs-4">
									<div class="form-group">
										<?php 
											$product_id= $row['id'];
											$sql2	= "SELECT * FROM product_assign WHERE product_id=$product_id ORDER BY id DESC LIMIT 1 ;";
											$result2 = mysqli_query($link, $sql2);
											$row2=mysqli_fetch_array($result2);
											?>
										<label>Transfer To</label>
										<select id="dv" name="employee_id" class="form-control select2" required >
											<option value="">Select Employee</option>
											<?php 
											$sql	= "select * from employees ORDER BY id ASC";
											$result = mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result))
												{
											?>
											<option value="<?php echo $row['employee_id'] ?>">
											<?php echo $row['employee_name'] ?>-<?php echo $row['employee_id'] ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="form-group">
										<label>Transfer Date</label>
										<input name="assign_date" type="text" class="form-control" id="rndate" value=""  autocomplete="off" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-8">
									<div class="form-group">
										<label for="ad">Remarks</label>
										<textarea id="ad" name="remarks" class="form-control" placeholder=""></textarea>
									</div>
								</div>
							</div>
							<button class="btn btn-danger" type="submit" name="submit"> Transfer This Product</i></button>
							<input type="text" name="id" value="<?php echo $row2['id'] ?>" />
							<input type="hidden" name="product_id" value="<?php echo $product_id ?>" />
						</form>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec LTD</a>
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
	 <script>
				$(function() {
				$("#cldate").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
			
			
			
			
											<script>
				$(function() {
				$("#rndate").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
        <!-- jQuery  -->
        <!-- jQuery  -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="plugins/morris/morris.min.js"></script>
		<script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>
		
		
		
		<script src="plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
		  <script type="text/javascript" src="plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/jquery.autocomplete.init.js"></script>

        <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
		
		

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>

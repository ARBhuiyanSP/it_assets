<?php include('header.php');

include('helper/utilities.php');
 ?>
            <!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content it_bg">
                    <div class="container">
                        <div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="row" style="border:1px solid #2e3192;border-radius:5px;margin-top:20px;padding-top:10px;background-color:#F3F3F3;">
								<form action="add_product.php" method="post" enctype="multipart/form-data">
									<div class="col-xs-12">
										<p><input class="btn btn-default btn-block" style="background-color:#F3F3F3" value="Asset Entry Form" /></p>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>SL No</label>
											<?php 
											
													$store_id	=	$_SESSION["store_id"];
													$sql	=	"SELECT * FROM store WHERE `id`='$store_id'";
													$result = mysqli_query($link, $sql);
													$row=mysqli_fetch_array($result);
													$short_name = $row['keyword'];
													$mrrcode= $short_name.'-';
												
											?>
											<input type="text" name="sl_no" id="sl_no" class="form-control" value="<?php echo getDefaultCategoryCodeByStore('ams_products', 'sl_no', '03d', '001', $mrrcode) ?>" readonly>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label>Store</label>
											<?php 
												$store_id = $_SESSION["store_id"];
												$sqlstore	= "select * from `store` where `id`='$store_id'";
												$resultstore = mysqli_query($link, $sqlstore);
												$rowstore=mysqli_fetch_array($resultstore);
											?>
											<input name="" type="text" class="form-control" id="laptop" value="<?php echo $rowstore['name']; ?>" size="30" required readonly />
											<input name="store_id" type="hidden" value="<?php echo $_SESSION["store_id"]; ?>" />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label for="id">Category</label>
											<select id="ac" name="assets_category" class="form-control select2" required >
												<option value="">Select</option>
												<?php 
												$sql	= "select * from assets_categories ORDER BY assets_id ASC";
												$result = mysqli_query($link, $sql);
												while($row=mysqli_fetch_array($result))
													{
												?>
												<option value="<?php echo $row['assets_id'] ?>"><?php echo $row['assets_category'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label>Type</label>
											<select id="at" name="assets_type" class="form-control select2" >
												<option>Select</option>
												<option value="Official">Official</option>
												<option value="Business">Business</option>
											</select>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group">
											<label>Assets Name</label>
											<input name="item_name" type="text" class="form-control" id="desktop" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Brand</label>
											<input name="brand" type="text" class="form-control" id="desktop" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label>Model</label>
											<input name="model" type="text" class="form-control" id="laptop" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Assets Description</label>
											<textarea name="assets_description" class="form-control" required ></textarea>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Manufacturing SL</label>
											<input name="manufacturing_sl" type="text" class="form-control" id="modem" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>RLP No</label>
											<input name="rlp_no" type="text" class="form-control" id="ipad" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase Order</label>
											<input name="purchase_order" type="text" class="form-control" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Delivery Chalan</label>
											<input name="delivery_chalan" type="text" class="form-control" id="antivirus" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Vendor Name</label>
											<select id="" name="vendor_name" class="form-control select2" required>
												<option value="">Select Vendor</option>
												<?php 
												$sql	= "select * from vendors ORDER BY vendor_id ASC";
												$result = mysqli_query($link, $sql);
												while($row=mysqli_fetch_array($result))
													{
												?>
												<option value="<?php echo $row['vendor_id'] ?>"><?php echo $row['vendor_name'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase Date</label>
											<input name="purchase_date" type="text" class="form-control" id="cldate" value="" size="30" autocomplete="off" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Warranty</label>
											<input name="warrenty" type="text" class="form-control" id="mobileno" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase value</label>
											<input name="purchase_value" type="text" class="form-control" id="mobilename" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Country of Origin</label>
											<input name="origin" type="text" class="form-control" id="pendrive" value="" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Custody</label>
											<select id="" name="custody" class="form-control select2" required>
												<option value="">Select Name</option>
												<option value="MD. Babul Farajee">MD. Babul Farajee</option>
												<option value="Sheikh Ahmed Adil">Sheikh Ahmed Adil</option>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Status</label>
											<select id=""name="status" class="form-control select2">
												<option value="active">Active</option>
												<option value="non-active">Non-Active</option>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Condition</label>
											<select id=""name="condition" class="form-control select2">
												<option value="good">Good</option>
												<option value="bad">Bad</option>
											</select>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label class="control-label">Product Serial Photo</label>
											<input type="file" name="slfileToUpload" class="filestyle" data-buttonname="btn-default" >
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label class="control-label">Product Original Photo</label>
											<input type="file" name="profileToUpload" class="filestyle" data-buttonname="btn-default" >
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label>Received By</label>
											<?php 
												$employee_id = $_SESSION["employee_id"];
												$sqlemployee	= "select * from `employees` where `employee_id`='$employee_id'";
												$resultemployee = mysqli_query($link, $sqlemployee);
												$rowemployee=mysqli_fetch_array($resultemployee);
											?>
											<input name="" type="text" class="form-control" id="laptop" value="<?php echo $rowemployee["employee_name"]; ?>" size="30" required readonly />
											<input name="received_by" type="hidden" value="<?php echo $rowemployee["employee_id"]; ?>" />
										</div>
									</div>
									<div class="col-xs-12">
										<p>
											<input type="submit" name="Submit" id="Submit" class="btn btn-success btn-block" value="Save Data" required  />
										  </p>
									</div>
								</form>	
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec</a>
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
				$("#antivirusdate").datepicker({
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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>

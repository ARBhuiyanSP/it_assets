<?php include('header.php'); 
$id=$_GET['id'];

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
                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
								<div class="row" style="border:1px solid #2e3192;border-radius:5px;margin-top:20px;padding-top:10px;background-color:#F3F3F3;">
									<form action="edit_product.php" method="post" enctype="multipart/form-data">
									<div class="col-xs-12">
										<p><input class="btn btn-default btn-block" style="background-color:#F3F3F3" value="Asset Edit Form" /></p>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<?php
											$sql    = "select * from ams_products where id=$id";
											$result = mysqli_query($link, $sql);
											$row    = mysqli_fetch_array($result);
											?>
											<label for="id">Assets category</label>
											<select id="ac" name="assets_category" class="form-control select2" required >
												<option value="<?php echo $row['assets_category'] ?>"><?php echo $row['assets_category'] ?></option>
												<?php 
												$sqlc	= "select * from assets_categories ORDER BY assets_id ASC";
												$resultc = mysqli_query($link, $sqlc);
												while($rowc=mysqli_fetch_array($resultc))
													{
												?>
												<option value="<?php echo $rowc['assets_id'] ?>"><?php echo $rowc['assets_category'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Assets Name</label>
											<input name="item_name" type="text" class="form-control" id="desktop" value="<?php echo $row['item_name'] ?>" size="50" required />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Brand</label>
											<input name="brand" type="text" class="form-control" id="desktop" value="<?php echo $row['brand'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Model</label>
											<input name="model" type="text" class="form-control" id="laptop" value="<?php echo $row['model'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Assets Description</label>
											<textarea name="assets_description" class="form-control"><?php echo $row['assets_description'] ?></textarea>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Manufacturing SL</label>
											<input name="manufacturing_sl" type="text" class="form-control" id="modem" value="<?php echo $row['manu_sl'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>RLP No</label>
											<input name="rlp_no" type="text" class="form-control" id="ipad" value="<?php echo $row['rlp_no'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase Order</label>
											<input name="purchase_order" type="text" class="form-control" value="<?php echo $row['purchase_order'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Delivery Chalan</label>
											<input name="delivery_chalan" type="text" class="form-control" id="antivirus" value="<?php echo $row['delivery_challam'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Vendor Name</label>
											<select id="" name="vendor_name" class="form-control select2">
												<option value="<?php echo $row['vendor_name'] ?>"><?php echo $row['vendor_name'] ?></option>
												<?php 
												$sqlv	= "select * from vendors ORDER BY vendor_id ASC";
												$resultv = mysqli_query($link, $sqlv);
												while($rowv=mysqli_fetch_array($resultv))
													{
												?>
												<option value="<?php echo $rowv['vendor_id'] ?>"><?php echo $rowv['vendor_name'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase Date</label>
											<input name="purchase_date" type="text" class="form-control" id="cldate" value="<?php echo $row['puchase_date'] ?>" size="30" autocomplete="off" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Warrenty</label>
											<input name="warrenty" type="text" class="form-control" id="mobileno" value="<?php echo $row['warrenty'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Purchase value</label>
											<input name="purchase_value" type="text" class="form-control" id="mobilename" value="<?php echo $row['purchase_value'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Country of Origin</label>
											<input name="origin" type="text" class="form-control" id="pendrive" value="<?php echo $row['origin'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Custody</label>
											<input name="custody" type="text" class="form-control" id="mobileno" value="<?php echo $row['custody'] ?>" size="30" required />
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Status</label>
											<select id=""name="status" class="form-control select2">
																						<option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>	
																						<option value="active">Active</option>
												<option value="non-active">Non-Active</option>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label>Condition</label>
											<select id=""name="condition" class="form-control select2">
																						<option value="<?php echo $row['conditions'] ?>"><?php echo $row['conditions'] ?></option>	
																						<option value="good">Good</option>
												<option value="bad">Bad</option>
											</select>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label class="control-label">Product Serial Photo</label>
											<span class="desc"><img height="50px" src="products_photo/<?php echo $row['photo']; ?>"  style="background-color:#9972B5;"/></span>
											<input type="hidden" name="sl_old_image" value="<?php echo $row['photo']; ?>"  />
											<input type="file" name="sl_prt_image" class="filestyle" data-buttonname="btn-default">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="form-group">
											<label class="control-label">Product Original Photo</label>
											<span class="desc"><img height="50px" src="products_photo/<?php echo $row['pro_photo']; ?>"  style="background-color:#9972B5;"/></span>
											<input type="hidden" name="pro_old_image" value="<?php echo $row['pro_photo']; ?>"  />
											<input type="file" name="pro_prt_image" class="filestyle" data-buttonname="btn-default">
										</div>
									</div>
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>"  />
									<div class="col-xs-12">
										<p>
											<input type="submit" name="Submit" id="Submit" class="btn btn-info btn-block" value="Update Data" required  />
										  </p>
									</div>
									</form>	
								</div>
							</div>
                            <div class="col-xs-1"></div>
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

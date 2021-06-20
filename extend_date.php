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
                        <div class="row" style="padding-top:50px;">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
								<div class="row" style="border:1px solid #2e3192;border-radius:5px;margin-top:20px;padding-top:10px;background-color:#F3F3F3;">
									<form action="extenddate.php" method="post">
									<div class="col-xs-12">
										<p><input class="btn btn-default btn-block" style="background-color:#F3F3F3" value="Extend Asset Return Date" /></p>
									</div>
									<?php
									$sql    = "select * from gate_pass where id=$id";
									$result = mysqli_query($link, $sql);
									$row    = mysqli_fetch_array($result);
									?>
									<div class="col-xs-12">
										<div class="form-group">
											<label>Product Description</label>
											<input name="" type="text" class="form-control" id="desktop" value="<?php echo $row['description'] ?>" size="30" readonly />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Gate Pass No</label>
											<input name="" type="text" class="form-control" id="desktop" value="<?php echo $row['challan_no'] ?>" size="30" readonly />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Rent From</label>
											<?php 
											$rentDate = strtotime($row['date']);
											$rendtDate = date("jS \of F Y",$rentDate);
											?>
											<input name="" type="text" class="form-control" id="desktop" value="<?php echo $rendtDate; ?>" size="30" readonly />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Rent To</label>
											<?php 
											$returnDate = strtotime($row['return_date']);
											$returndDate = date("jS \of F Y",$returnDate);
											?>
											<input name="" type="text" class="form-control" id="desktop" value="<?php echo $returndDate; ?>" size="30" readonly />
										</div>
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<label>Extend Date To</label>
											<input name="extend_date" type="text" class="form-control" id="cldate" value="" size="30" autocomplete="off" required />
										</div>
									</div>
									<input type="hidden" name="id" value="<?php echo $id; ?>"  />
									<input type="hidden" name="gate_pass" value="<?php echo $row['challan_no'] ?>"  />
									<div class="col-xs-12">
										<p><input type="submit" name="Submit" id="Submit" class="btn btn-info btn-block" value="Extend date" /></p>
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

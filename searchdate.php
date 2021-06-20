<?php include('header.php'); ?>
            <!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
.padding{
	padding-bottom:10px;
}
</style>

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
                                    <h4 class="page-title">Fitness/Tax Token Expire Report</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                           <div class="col-lg-12">
                                <div class="container">
									<div class="row padding">
										<div class="col-lg-12">

											<form class="form-inline" action="tableedit2.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-3"><h5>Fitness Expire Date</h5></div>
													<div class="col-lg-9">
														<div class="form-group m-r-10">
															<label for="exampleInputName2"></label>
															<input type="date" name="from" class="form-control" id="fromdate">
														</div>
														<div class="form-group m-r-10">
															<label for="exampleInputEmail2"></label>
															<input type="date" name="to" class="form-control" id="todate">
														</div>
														<button name="search" type="submit" class="btn btn-custom waves-effect waves-light btn-md">
															Search
														</button>
													</div>
												</div>
                                            </form>
                                        </div>
									</div>
									<div class="row padding">
										<div class="col-lg-12">

											<form class="form-inline" action="tableedit3.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-3"><h5>Tax token Expire  Date</h5></div>
													<div class="col-lg-9">
														<div class="form-group m-r-10">
															<label for="exampleInputName2"></label>
															<input type="date" name="from1" class="form-control" id="fromdate1">
														</div>
														<div class="form-group m-r-10">
															<label for="exampleInputEmail2"></label>
															<input type="date" name="to1" class="form-control" id="todate1">
														</div>
														<button name="search" type="submit" class="btn btn-custom waves-effect waves-light btn-md">
															Search
														</button>
													</div>
												</div>
                                            </form>
                                        </div>
									</div>
									<div class="row padding">
										<div class="col-lg-12">

											<form class="form-inline" action="tableedit4.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-3"><h5>Insurance Expire Date</h5></div>
													<div class="col-lg-9">
														<div class="form-group m-r-10">
															<label for="exampleInputName2"></label>
															<input type="date" name="from2" class="form-control" id="fromdate2">
														</div>
														<div class="form-group m-r-10">
															<label for="exampleInputEmail2"></label>
															<input type="date" name="to2" class="form-control" id="todate2">
														</div>
														<button name="search" type="submit" class="btn btn-custom waves-effect waves-light btn-md">
															Search
														</button>
													</div>
												</div>
                                            </form>
                                        </div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<form class="form-inline" action="tableedit5.php" method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-lg-3"><h5>Route Permit Expire Date</h5></div>
													<div class="col-lg-9">
														<div class="form-group m-r-10">
															<label for="exampleInputName2"></label>
															<input type="date" name="from3" class="form-control" id="fromdate3">
														</div>
														<div class="form-group m-r-10">
															<label for="exampleInputEmail2"></label>
															<input type="date" name="to3" class="form-control" id="todate3">
														</div>
														<button name="search" type="submit" class="btn btn-custom waves-effect waves-light btn-md">
															Search
														</button>
													</div>
												</div>
                                            </form>
                                        </div>
									</div>
								</div>
								<div id="action_alert" title="Action">

								</div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->







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
				$("#fromdate").datepicker({
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
				$("#todate").datepicker({
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
				$("#fromdate1").datepicker({
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
				$("#todate1").datepicker({
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
				$("#fromdate2").datepicker({
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
				$("#todate2").datepicker({
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
				$("#fromdate3").datepicker({
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
				$("#todate3").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
		
		
		
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

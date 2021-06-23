<?php include('header.php'); ?>
            <!-- Left Sidebar End -->



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
                                    <h4 class="page-title">Dashboard</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                           <div class="col-lg-4 col-md-4">
								<?php
								$sql	=	"select * from vendors";
								$result = mysqli_query($link, $sql);
								$rowcount=mysqli_num_rows($result);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-account-card-details widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Vendors</p>
                                        <h2><?php echo $rowcount; ?>  <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="text-muted m-0"><b></b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4 col-md-4">
                                <?php
								$sqlemp	=	"select * from employees";
								$resultemp = mysqli_query($link, $sqlemp);
								$empcount=mysqli_num_rows($resultemp);
								?>
								<div class="card-box widget-box-two widget-two-warning">
                                    <i class="mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Employee</p>
                                        <h2><?php echo $empcount; ?>  <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                        <p class="text-muted m-0"><b></b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->
							
							<div class="col-lg-4 col-md-4">
                                <?php
								$store_id = $_SESSION["store_id"];
								$sqlpro	=	"select * from `ams_products` where `store_id`='$store_id' ";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-basket-fill widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Total Products</p>
                                        <h3><?php echo $procount; ?><small> </small></h3>
                                        <p class="text-muted m-0"><b></b> </p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
						<div class="row">
							
							
							
							
							<?php 
								$sql = "select * FROM `assets_categories` LIMIT 12";
								$result = mysqli_query($link, $sql);
								while ($row = mysqli_fetch_array($result)) {
							?>
							
							<div class="col-lg-2 col-md-2">
                                <?php
								$store_id = $_SESSION["store_id"];
								$assets_category	=	$row['assets_id'];
								$sqlpro	=	"select * FROM `ams_products` WHERE `assets_category`='$assets_category' AND `store_id`='$store_id'";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics"><?php echo $row['assets_category']; ?></p>
                                        <h3><?php echo $procount; ?><small> Total Item</small></h3>
										<?php
											$store_id = $_SESSION["store_id"];
											$assets_category	=	$row['assets_id'];
											$sqlstock	=	"select * FROM `ams_products` WHERE `assets_category`='$assets_category' AND `store_id`='$store_id' AND `assign_status`!='assigned'";
											$resultstock = mysqli_query($link, $sqlstock);
											$stockcount=mysqli_num_rows($resultstock);
										?>
                                        <p class="text-muted m-0"><b><?php echo $stockcount; ?></b> Instock</p>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
							
							
							
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

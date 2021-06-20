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
                                        <p class="text-muted m-0"><b>Last:</b> 30.4k</p>
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
                                        <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
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
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>
						<div class="row">
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-monitor widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Desktop</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-laptop widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Laptop</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-mouse widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Mouse</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-keyboard widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Keyboard</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-router-wireless widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Router</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-2 col-md-2">
                                <?php
								$sqlpro	=	"select * from ams_products";
								$resultpro = mysqli_query($link, $sqlpro);
								$procount=mysqli_num_rows($resultpro);
								?>
								<div class="card-box widget-box-two widget-two-success">
                                    <i class="mdi mdi-switch widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Switch</p>
                                        <h3><?php echo $procount; ?><small> Stock</small></h3>
                                        <p class="text-muted m-0"><b>25</b> Using</p>
                                    </div>
                                </div>
                            </div>
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

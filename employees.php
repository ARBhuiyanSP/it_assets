<?php include('header.php'); ?>
            <!-- Left Sidebar End -->
<!-- DataTables -->
<link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
			

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
                                    <h4 class="page-title">SPL@Employee Entry</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                       <div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="card-box table-responsive">
										<h4 class="header-title"><b>Employee List</b><span style="float:right;"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span></h4>
										<table id="datatable" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Employee ID</th>
													<th>Employee Name</th>
													<th>Company</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<?php
												$query=mysqli_query($link,"select `id`,`employee_id`,`employee_name`,`company` FROM `employees` WHERE `status`='Active'");
												while($row=mysqli_fetch_array($query)){
													?>
												<tr>
													<td><?php echo ucwords($row['employee_id']); ?></td>
													<td><?php echo ucwords($row['employee_name']); ?></td>
													<td><?php echo ucwords($row['company']); ?></td>
													<td>
														<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
														<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
														<?php include('button.php'); ?>
													</td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
	
			




                    </div> <!-- container -->
                    </div> <!-- container -->
					

                </div> <!-- content -->
<?php//include('add_modal.php'); ?>
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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>

<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="plugins/datatables/jszip.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="plugins/datatables/dataTables.scroller.min.js"></script>
<script src="plugins/datatables/dataTables.colVis.js"></script>
<script src="plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

</script>

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

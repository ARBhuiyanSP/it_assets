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
            <div class="col-md-3">
                <form id="sidebar">
                    <div class="form-group">
                        <label for="nm">Employee ID</label>
                        <input type="text" id="id" name="id" class="form-control" Value=""/>
                    </div>
					<div class="form-group">
                        <label for="nm">Employee Name</label>
                        <input type="text" id="en" name="en" class="form-control" placeholder="Employee Name" />
                    </div>
                    <div class="form-group">
                        <label for="dv">Division</label>
						<select id="dv" name="dv" class="form-control select2">
							<option>Select Category</option>
							<?php 
							$sql	= "select * from divisions ORDER BY division_id ASC";
							$result = mysqli_query($link, $sql);
							while($row=mysqli_fetch_array($result))
								{
							?>
							<option value="<?php echo $row['division_id'] ?>"><?php echo $row['division_name'] ?></option>
							<?php } ?>
						</select>
						
                    </div>
                    <div class="form-group">
                        <label for="dp">Department</label>
						<select id="dp" name="dp" class="form-control select2">
							<option>Select Department</option>
							<?php 
							$sql	= "select * from departments ORDER BY dept_id ASC";
							$result = mysqli_query($link, $sql);
							while($row=mysqli_fetch_array($result))
								{
							?>
							<option value="<?php echo $row['dept_id'] ?>"><?php echo $row['dept_name'] ?></option>
							<?php } ?>
						</select>
						
                    </div>
                    <div class="form-group">
                        <label for="dg">Designation</label>
						<select id="dg" name="dg" class="form-control select2">
							<option>Select Designation</option>
							<?php 
							$sql	= "select * from designations ORDER BY deg_id ASC";
							$result = mysqli_query($link, $sql);
							while($row=mysqli_fetch_array($result))
								{
							?>
							<option value="<?php echo $row['deg_id'] ?>"><?php echo $row['deg_name'] ?></option>
							<?php } ?>
						</select>
						
                    </div>
                    <button type="button" id="save" class="btn btn-primary" onclick="saveData()">Save</button>
                    <button type="button" id="update" class="btn btn-warning" onclick="updateData()">Update</button>
                </form>
            </div>
            <div class="col-md-9">
                <table id="dataTable" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="40">Employee ID</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
					</tbody>
                </table>
            </div>
        </div>
    </div>
	
			




                    </div> <!-- container -->
                    </div> <!-- container -->
					

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> ?? <a href="" target="blank">Saif Powertec</a>
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
                    ajax: "plugins/datatables/json/scroller-demo.json",
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
		
		<!-- Modal-Effect -->
        <script src="plugins/custombox/js/custombox.min.js"></script>
        <script src="plugins/custombox/js/legacy.min.js"></script>

		<script src="script_employee_entry.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		

    </body>
</html>

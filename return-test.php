<?php 
include('header.php');
//$id=$_GET['id'];
$id='CGP-001';
?>

	
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
                                    <h4 class="page-title">Rented Asstes View</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								
							</div>
							<div class="col-lg-1"></div>
						</div>

  
		<div  class="CSSTableGenerator" >
			<?php
								$sql	=	"select * from `gate_pass` where `challan_no`='$id'";
								$result = mysqli_query($link, $sql);
								$row=mysqli_fetch_array($result);
								?>
			<table width='100%'>				
				<tr>
					<td style="text-align:center"><div class="headbody">
						<h3 align="center">Assets Return</h3>
					</div></td>
				</tr>
			</table>
			<table width='100%'>				
				<tr>
					<td>Challan No: <b><?php echo$row['challan_no']; ?></b></td>
					<td align="center"></td>
					<td style="float:right;">Date : <?php 
						$cDate = strtotime($row['date']);
						$dDate = date("jS \of F Y",$cDate);
						echo $dDate;?></td>
				</tr>
			</table>
			</br>
			<table id="" class="table table-bordered">
				<tr>
					<td style="text-align:center;">ID</td>
					<td style="text-align:center;">Description</td>
					<td style="text-align:center;">Quantity</td>
					<td style="text-align:center;">Remarks</td>
					<td style="text-align:center;">Status</td>
				</tr>
				<?php 
				$sql=$link->query("Select * from `gate_pass` where `challan_no`='$id'");
				foreach ($sql as $key => $user) :
					?>
				<tr>
					<td><div style="text-align:center;" class=""><?php echo $user['id'] ?></div></td>
					<td><div style="text-align:center;" class=""><?php echo $user['description'] ?></div></td>
					<td><div style="text-align:center;" class=""><?php echo $user['quantity'] ?></div></td>
					<td><div style="text-align:center;" class=""><?php echo $user['remarks'] ?></div></td>
					<td style="text-align:center;"><i data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($user['status'])? 'Rented' : 'Returned'?></i></td>
				</tr>
			   <?php endforeach; ?>
			</table>
		</div>
	
<button class="btn btn-default" onclick="window.location.href = 'assets-return.php'"><i class="fa fa-hand-o-right" aria-hidden="true" style="  font-size: 17px;"> Assets Rent List</i></button>
                    </div> <!-- container -->
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
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Returned' : 'Rented';
if(confirm("Are you sure to "+ msg)){
	var current_element = $(this);
	url = "ajax.php";
	$.ajax({
	type:"POST",
	url: url,
	data: {id:$(current_element).attr('data'),status:status},
	success: function(data)
		{   
			location.reload();
		}
	});
	}      
});
</script>
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

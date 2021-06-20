<?php include('header.php');
$id=$_GET['id'];
 ?>
            <!-- Left Sidebar End -->
			
		
		<style>
		.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
			border:1px solid #000000;
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
                                    <h4 class="page-title">Gate Pass View</h4>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <div class="row" id="printableArea" style="display:block;">
								<?php
								$sql	=	"select * from `gate_pass` where `challan_no`='$id'";
								$result = mysqli_query($link, $sql);
								$row=mysqli_fetch_array($result);
								?>
                            <div class="col-lg-12">
								<table width='100%'>				
									<tr>
										<td style="text-align:center"><div class="headbody">
											<h1 align="center"><img src="images/blc-logo.png" width="162" height=""></h1>
											<h2 align="center">BLUELINE COMMUNICATIONS LTD</h2>
											<p align="center">Gulshan Grace, Apartment # 5E, Building # B, C.W.S. (C)-8,South Avenue, Gulshan-1, Dhaka, Bangladesh.</p>
											<h3 align="center">Gate Pass</h3>
										</div></td>
									</tr>
								</table>
								<table width='100%' class="table table-bordered" style="background-color:#fdfhfh;">				
									<tr>
										<td width="33%">Project Name : <b><?php echo$row['project_name']; ?></b></td>
										<td align="" width="34%"> W/O No <b><?php echo$row['wo_no']; ?></b></td>
										<td width="33%">W/O Date : 
											<?php 
											if($row['wo_date']){
												$cDate = strtotime($row['wo_date']);
											$dDate = date("jS \of F Y",$cDate);
											echo $dDate;
											}
											else{
												echo '---';
											}
											?>
										</td>
									</tr>
                                    <tr>
										<td>Notesheet : <b><?php echo$row['po_notesheet']; ?></b></td>
										<td align=""> Notesheet No <b><?php echo$row['po_notesheet_no']; ?></b></td>
										<td>Notesheet Date : 
											<?php 
											if($row['po_notesheet_date']){
											$cDate = strtotime($row['po_notesheet_date']);
											$dDate = date("jS \of F Y",$cDate);
											echo $dDate;	
											}else{
												echo '---';
											}
											
											?>
										</td>
									</tr>
									<tr>
										<td>Gate Pass No: <b><?php echo$row['challan_no']; ?></b></td>
										<td align="">Carrier Name: <b><?php echo$row['carrier_information']; ?></b></td>
										<td>Rent Date : 
											<?php 
											$cDate = strtotime($row['date']);
											$dDate = date("jS \of F Y",$cDate);
											echo $dDate;?> --To-- <?php 
											$cDate = strtotime($row['return_date']);
											$dDate = date("jS \of F Y",$cDate);
											echo $dDate;
											?>
										</td>
									</tr>
								</table>
								</br>
								<table id="" class="table table-bordered">
									<thead>
									<tr>
										<th style="text-align:center;">Name</th>
										<th style="text-align:center;">Quantity</th>
										<th style="text-align:center;">Location</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$sqlt	=	"select * from `gate_pass` where `challan_no`='$id'";
									$resultt = mysqli_query($link, $sql);
									while($rowt=mysqli_fetch_array($resultt))
											{
									?>
										<tr style="text-align:center;">
											<td><div style="" class="">
													<?php 
														$pid		= $rowt['product_name'];
														$sqlpn		= "select * from `ams_products` where `id`='$pid'";
														$resultpn 	= mysqli_query($link, $sqlpn);
														$rowpn		= mysqli_fetch_array($resultpn);
														echo $rowpn['item_name'];
													?>
												</div>
											</td>
											<td><div style="" class=""><?php echo $rowt['quantity'] ?></div></td>
											<td><div style="" class=""><?php echo $rowt['location'] ?></div></td>
										</tr>
									<?php } ?>
									<tr style="text-align:center;">
										<td><div style="" class="">Total</div></td>
										<td><div style="" class="">
										<?php  
											    $sql2 = "SELECT sum(quantity) FROM  `gate_pass` where `challan_no`='$id'";
												$result2 = mysqli_query($link, $sql2);
												for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
												$fgfg2=$row2['sum(quantity)'];
												echo $fgfg2 ;
												}
										
										?>
										</div></td>
										<td></td>
									</tr>
									</tbody>
								</table>
								<table class="table">
									<tr>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">Received By</p>
										</td>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">Authorized Signature</p>
										</td>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">for Saif Powertec Ltd.</p>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
							
							<script>
							function printDiv(divName) {
								 var printContents = document.getElementById(divName).innerHTML;
								 var originalContents = document.body.innerHTML;

								 document.body.innerHTML = printContents;

								 window.print();

								 document.body.innerHTML = originalContents;
							}
							</script>
							<button class="btn btn-default" onclick="window.location.href = 'gate_pass_list.php'"><i class="fa fa-hand-o-right" aria-hidden="true" style="  font-size: 17px;"> Back To Gate Pass List</i></button>
                    </div> <!-- container -->
                </div> <!-- container -->
            </div> <!-- content -->
			<footer class="footer text-right">
			   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec Ltd</a>
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
        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		

    </body>
</html>

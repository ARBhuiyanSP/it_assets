<?php 
include('header.php');
$id=$_GET['id'];
?>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



		<link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

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

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<div  class="CSSTableGenerator" >
			<?php
			$sql	=	"select * from `gate_pass` where `challan_no`='$id'";
			$result = mysqli_query($link, $sql);
			$row=mysqli_fetch_array($result);
			?>
			<table width='100%'>				
				<tr>
					<td style="text-align:center"><div class="headbody">
						<h1 align="center"><img src="images/blc-logo.png" width="162" height=""></h1>
						<h2 align="center">BLUELINE COMMUNICATIONS LTD</h2>
						<p align="center">Gulshan Grace, Apartment # 5E, Building # B, C.W.S. (C)-8,South Avenue, Gulshan-1, Dhaka, Bangladesh.</p>
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
					<td style="text-align:center;">Rent date</td>
					<td style="text-align:center;">Return date</td>
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
					<td>
						<div style="text-align:center;" class="">
							<?php 
							$rentDate = strtotime($user['date']);
							$rendtDate = date("jS \of F Y",$rentDate);
							echo $rendtDate;?>
						</div>
					</td>
					<td>
						<div style="text-align:center;" class="">
							<?php 
							$returnDate = strtotime($user['return_date']);
							$returndDate = date("jS \of F Y",$returnDate);
							echo $returndDate;?>
						</div>
					</td>
					<td><div style="text-align:center;" class=""><?php echo $user['remarks'] ?></div></td>
					<td style="text-align:center;"><i data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($user['status'])? 'Rented' : 'Returned'?></i>
					<button onclick="window.location.href = 'extend_date.php?id=<?php echo $user['id'] ?>'"  class='btn' style="background-color:#F26522;color:#ffffff;"><i class="fa fa-calendar text-success"></i> Extend date</button>
					</td>
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
             <!-- jQuery  -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<script type="text/javascript" src="plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="assets/pages/jquery.autocomplete.init.js"></script>
		<script src="assets/pages/jquery.form-pickers.init.js"></script>
		
		
		

    </body>
</html>

<?php include('header.php'); 
?>
            <!-- Left Sidebar End -->

		<!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


     
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Challan Entry Form</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                           <div class="col-lg-12">
                                <div class="container">
								<form action="testadd.php" method="post">
								<div class="row">
									<div class="col-xs-12" id="txtHint">
										<div class="row" style="background-color:#f26522;color:#fff">
											<div class="col-xs-2">
												<div class="form-group">
													<label>Challan No</label>
													<input name="challan_no" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
											<div class="col-xs-2">
												<div class="form-group">
													<label>Date</label>
													<input name="date" type="text" class="form-control" id="cldate" value="" size="30" autocomplete="off"/>
												</div>
											</div>
											<div class="col-xs-2">
												<div class="form-group">
													<label>Return Date</label>
													<input name="return_date" type="text" onchange="showdays()" class="form-control" id="rndate" value="" size="30" autocomplete="off"/>
												</div>
											</div>
											<div class="col-xs-2">
												<div class="form-group">
													<label>Total Days</label>
													<input type="text" name="totaldays" class="form-control" maxlength="100" id="result" readonly />	
												</div>
											</div>
											<div class="col-xs-2">
												<div class="form-group">
													<label for="id">Type</label>
													<select id="ac" name="assets_category" class="form-control select2">
														<option>Select Type</option>
														
														<option value="<?php echo $row['assets_id'] ?>">Own</option>
														<option value="<?php echo $row['assets_id'] ?>">Rent</option>
														
													</select>
												</div>
											</div>
											<div class="col-xs-2">
												<div class="form-group">
													<label for="id">Client name</label>
													<select id="ac" name="assets_category" class="form-control select2">
														<option>Select Client</option>
														<?php 
														$sql	= "select * from clients ORDER BY client_id ASC";
														$result = mysqli_query($link, $sql);
														while($row=mysqli_fetch_array($result))
															{
														?>
														<option value="<?php echo $row['client_id'] ?>"><?php echo $row['client_name'] ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
									
									
									
									<div class="row" id="div1">
						<div class="table-responsive">
							<table class="table table-bordered" width="100%" id="dynamic_field">
							<thead>
								<th style="background-color:#188ae2;">Item Name</th>
								<th style="background-color:#188ae2;">Product Name</th>
								<th style="background-color:#188ae2;">Quantity</th>
								<th style="background-color:#188ae2;">Product Description</th>
								<th style="background-color:#188ae2;"></th>
							</thead>
							<tbody>
								<tr>
									<td><select name="button_line[]" class="form-control name_list">
												<option>Select Item</option>
													<?php 
													$sql	= "select * from products ORDER BY product_code ASC";
													$result = mysqli_query($link, $sql);
													while($row=mysqli_fetch_array($result))
														{
													?>
													<option value="<?php echo $row['product_code'] ?>"><?php echo $row['product_name'] ?></option>
													<?php } ?>
												</select> </td>
									<td><select name="button_hole[]" class="form-control name_list">
												<option>Select Item</option>
													<?php 
													$sql	= "select * from ams_products ORDER BY id ASC";
													$result = mysqli_query($link, $sql);
													while($row=mysqli_fetch_array($result))
														{
													?>
													<option value="<?php echo $row['id'] ?>"><?php echo $row['item_name'] ?></option>
													<?php } ?>
											</select> </td>
									<td><input type="text" name="qty[]" id="qty0" onchange="sum(0)" placeholder="Enter your Qty" class="form-control name_list" /></td>
									<td><input type="text" name="rate[]" id="rate0" onchange="sum(0)" placeholder="Enter your Rate" class="form-control name_list" /></td>
									<td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
								</tr>
							</tbody>
							</table>
						</div>
                    </div>
									<div class="row" style="background-color:#f26522;color:#fff">
											<div class="col-xs-3">
												<div class="form-group">
													<label>Project Name</label>
													<input name="challan_no" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
											
											<div class="col-xs-3">
												<div class="form-group">
													<label>Location</label>
													<input name="challan_no" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
											<div class="col-xs-3">
												<div class="form-group">
													<label>Carier Information</label>
													<input name="name" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
											
											<div class="col-xs-3">
												<div class="form-group">
													<label>Remarks</label>
													<input name="name" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
										</div>
										<div align="center"></br>
											<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Create Challan"/>
										</div>
								</div>
								</form>
							</div>
						</div>

									




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
				$("#rndate").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
			
			<script language="JavaScript" type="text/javascript">
			// To calulate difference b/w two dates
			function showdays() {
			 var d1 = $('#cldate').datepicker('getDate');
				  var d2 = $('#rndate').datepicker('getDate');
				  var diff = 0;
				  if (d1 && d2) {
						diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
				  }
				  $('#result').val(diff);
			}
		 
		</script>


		
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
	
<script>
var i=0;
$(document).ready(function(){
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="button_line[]" class="form-control name_list"><option>Select Item</option><?php $sql	= "select * from products ORDER BY product_code ASC";$result = mysqli_query($link, $sql);while($row=mysqli_fetch_array($result)){?><option value="<?php echo $row["product_code"] ?>"><?php echo $row["product_name"] ?></option><?php } ?></select></td><td><select name="button_hole[]" class="form-control name_list"><option>Select Item</option><?php $sql	= "select * from ams_products ORDER BY id ASC";$result = mysqli_query($link, $sql);while($row=mysqli_fetch_array($result)){?><option value="<?php echo $row['id'] ?>"><?php echo $row['item_name'] ?></option><?php } ?></select> </td><td><input type="text" name="qty[]" id="qty'+i+'" onchange="sum(0)" placeholder="Enter your Qty" class="form-control name_list" /></td><td><input type="text" name="rate[]" id="rate'+i+'" onchange="sum(0)" placeholder="Enter product description" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
        $('#qty'+i+', #rate'+i).change(function() {
            sum(i)
        });
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
        sum_total();
    });

    $('#submit').click(function(){      
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });

});


</script>
    </body>
</html>

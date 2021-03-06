<?php include('header.php'); ?>

<!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



		<link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		
		
        <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>




        <div class="container">
            <div class="form-group">
                <form action="name.php" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1"  style="background-color:#fafbf6;color:#000;">
						<div class="col-xs-2">
							<div class="form-group">
								<label>Challan No</label>
								<input name="challan_no" type="text" class="form-control" id="" value="CGP-" size="30" />
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
								<select id="ac" name="type" class="form-control select2">
									<option>Select Type</option>
									
									<option value="Own">Own</option>
									<option value="Rent">Rent</option>
									
								</select>
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Client name</label>
								<select id="ac" name="client_name" class="form-control select2">
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
					<div class="row" id="div1"  style="background-color:#fafbf6;color:#000;">
						<div class="table-responsive">
							<table class="table table-bordered" id="dynamic_field">
							<thead>
								<th>Product Name</th>
								<th>Qty</th>
								<th>Product Description</th>
								<th></th>
							</thead>
							<tbody>
								<tr>
									<td>
										<select name="product_name[]" class="form-control name_list">
											<option>Select Item</option>
											<?php 
											$sql	= "select * from ams_products ORDER BY id ASC";
											$result = mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result))
												{
											?>
											<option value="<?php echo $row['id'] ?>"><?php echo $row['manu_sl'] ?></option>
											<?php } ?>
										</select>
									</td>
									<td><input type="text" name="qty[]" id="qty0" placeholder="Enter your Qty" class="form-control name_list" /></td>
									<td><input type="text" name="description[]" id="description0" placeholder="Enter your Rate" class="form-control name_list" /></td>
									<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
								</tr>
							</tbody>
							</table>
						</div>
                    </div>
					<div class="row">
						<div class="col-xs-3">
							<div class="form-group">
								<label>Project Name</label>
								<input name="project_name" type="text" class="form-control" id="" value="" size="30" />
							</div>
						</div>
						
						<div class="col-xs-3">
							<div class="form-group">
								<label>Location</label>
								<input name="location" type="text" class="form-control" id="" value="" size="30" />
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Carrier Information</label>
								<input name="carrier_information" type="text" class="form-control" id="" value="" size="30" />
							</div>
						</div>
						
						<div class="col-xs-3">
							<div class="form-group">
								<label>Remarks</label>
								<input name="remarks" type="text" class="form-control" id="" value="" size="30" />
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<div class="modal-footer">
									<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
								</div>    
							</div>
						</div>
					</div>
					
						 
                </form>
            </div>
        </div>
    </body>
	
	
<script>
var i=0;
$(document).ready(function(){
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td><select name="product_name[]" class="form-control name_list"><option>Select Item</option><?php $sql	= "select * from ams_products ORDER BY id ASC";$result = mysqli_query($link, $sql);while($row=mysqli_fetch_array($result)){?><option value="<?php echo $row["id"] ?>"><?php echo $row["manu_sl"] ?></option><?php } ?></select></td><td><input type="text" name="qty[]" id="qty'+i+'" placeholder="Enter your Qty" class="form-control name_list" /></td><td><input type="text" name="description[]" id="description'+i+'" placeholder="Enter your Rate" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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

		
</html>


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
                                            
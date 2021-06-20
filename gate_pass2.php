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
											<div class="col-xs-3">
												<div class="form-group">
													<label>Challan No</label>
													<input name="challan_no" type="text" class="form-control" id="" value="" size="30" />
												</div>
											</div>
											<div class="col-xs-3">
												<div class="form-group">
													<label>Date</label>
													<input name="purchase_date" type="text" class="form-control" id="cldate" value="" size="30" autocomplete="off"/>
												</div>
											</div>
											<div class="col-xs-3">
												<div class="form-group">
													<label for="id">Type</label>
													<select id="ac" name="assets_category" class="form-control select2">
														<option>Select Type</option>
														
														<option value="<?php echo $row['assets_id'] ?>">Own</option>
														<option value="<?php echo $row['assets_id'] ?>">Rent</option>
														
													</select>
												</div>
											</div>
											<div class="col-xs-3">
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
									
									
									
									<div class="row">
									<table width="100%">
										<tr>
											<td>Item name</td>
											<td>Products name</td>
											<td>Quantity</td>
											<td>Products Description</td>
										</tr>
										<tr class="row_to_clone">
											<td>
												<select id="ac" name="quantity[]" class="form-control select2">
													<option>Select Item</option>
													<?php 
													$sql	= "select * from products ORDER BY product_code ASC";
													$result = mysqli_query($link, $sql);
													while($row=mysqli_fetch_array($result))
														{
													?>
													<option value="<?php echo $row['product_code'] ?>"><?php echo $row['product_name'] ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<select id="ac" name="voucherno[]" class="form-control select2">
													<option>Select Item</option>
													<?php 
													$sql	= "select * from ams_products ORDER BY id ASC";
													$result = mysqli_query($link, $sql);
													while($row=mysqli_fetch_array($result))
														{
													?>
													<option value="<?php echo $row['id'] ?>"><?php echo $row['item_name'] ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" name="details[]" value="" class="prd form-control" autocomplete='off' />
											</td>
											<td>
												<input type="text" name="cost[]" value="" class="txt form-control" autocomplete='off' />
											</td>
										</tr></br>
									</table>
									</div>
									<a class="addRow" href="#">Add Another</a>
									
									
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
													<label>Vehicle Information</label>
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
				$("#antivirusdate").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
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
			function addRow() {
    /* Declare variables */
    var elements, templateRow, rowCount, row, className, newRow, element;
    var i, s, t;

    /* Get and count all "tr" elements with class="row".    The last one will
     * be serve as a template. */
    if (!document.getElementsByTagName) return false; /* DOM not supported */
    elements = document.getElementsByTagName("tr");
    templateRow = null;
    rowCount = 0;
    for (i = 0; i < elements.length; i++) {
        row = elements.item(i);

        /* Get the "class" attribute of the row. */
        className = null;
        if (row.getAttribute) className = row.getAttribute('class')
        if (className == null && row.attributes) { // MSIE 5
            /* getAttribute('class') always returns null on MSIE 5, and
             * row.attributes doesn't work on Firefox 1.0.    Go figure. */
            className = row.attributes['class'];
            if (className && typeof (className) == 'object' && className.value) {
                // MSIE 6
                className = className.value;
            }
        }

        /* This is not one of the rows we're looking for.    Move along. */
        if (className != "row_to_clone") continue;

        /* This *is* a row we're looking for. */
        templateRow = row;
        rowCount++;
    }
    if (templateRow == null) return false; /* Couldn't find a template row. */

    /* Make a copy of the template row */
    newRow = templateRow.cloneNode(true);

    /* Change the form variables e.g. price[x] -> price[rowCount] */
    elements = newRow.getElementsByTagName("input");
    for (i = 0; i < elements.length; i++) {
        element = elements.item(i);
        s = null;
        s = element.getAttribute("name");
        if (s == null) continue;
        t = s.split("[");
        if (t.length < 2) continue;
        s = t[0] + "[" + rowCount.toString() + "]";
        element.setAttribute("name", s);
        element.value = "";
    }
    
    /* Remove any pre-existing value from row */
    $(newRow).find("input").val("");
    
    /* Add the newly-created row to the table */
    templateRow.parentNode.appendChild(newRow);
    return true;
}


$(".addRow").on("click", addRow);

$("table").on("keyup", ".txt", function () {
    calculateSum();
});
		</script>
    </body>
</html>

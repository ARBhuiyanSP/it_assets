<?php include('header.php');

include('helper/utilities.php');

//$_SESSION["id"];
//$_SESSION["userId"] = "9";

if (count($_POST) > 0) {
    $result = mysqli_query($link, "SELECT *from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
   
   /* if ($_POST["currentPassword"] == $row["password"]) { */
        $password = $_POST["newPassword"];
		$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
		mysqli_query($link, "UPDATE users set password='$param_password' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed Successfully";
    /* } else
        $message = "Current Password is not correct"; */
}
?>
            <!-- Left Sidebar End -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content it_bg">
                    <div class="container">
                        <div class="row">
							<div class="col-md-6">
								<?php 
									$employee_id = $_SESSION["employee_id"];
									$sqlemployee	= "select * from `employees` where `employee_id`='$employee_id'";
									$resultemployee = mysqli_query($link, $sqlemployee);
									$rowemployee=mysqli_fetch_array($resultemployee);
								?>
								<h3><?php echo $rowemployee["employee_name"]; ?></h3>
								<p><?php echo $rowemployee["designation"]; ?></p>
								<p><?php echo $rowemployee["division"]; ?>,<?php echo $rowemployee["department"]; ?></p>
							</div>
							<div class="col-md-6">
							<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
								<div style="width:500px;">
									<div class="message" style=""><?php if(isset($message)) { echo $message; } ?></div>
									<table class="table" border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
										<tr class="tableheader">
											<td colspan="2"><h3>Change Password</h3></td>
										</tr>
										<!-- <tr>
											<td width="40%"><label>Current Password</label></td>
											<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
										</tr> -->
										<tr>
											<td><label>New Password</label></td>
											<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required" style="color:red;"></span></td>
										</tr>
											<td><label>Confirm Password</label></td>
											<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required" style="color:red;"></span></td>
										</tr>
										<tr>
											<td colspan="2"><input type="submit" name="submit" value="Change Password" class="btn btn-success btn-block btnSubmit"></td>
										</tr>
									</table>
								</div>
							</form>
							</div>
						</div>
                    </div> <!-- container -->

                </div> <!-- content -->
				
				
				<script>
					function validatePassword() {
					var currentPassword,newPassword,confirmPassword,output = true;

					currentPassword = document.frmChange.currentPassword;
					newPassword = document.frmChange.newPassword;
					confirmPassword = document.frmChange.confirmPassword;

					if(!currentPassword.value) {
					currentPassword.focus();
					document.getElementById("currentPassword").innerHTML = "required";
					output = false;
					}
					else if(!newPassword.value) {
					newPassword.focus();
					document.getElementById("newPassword").innerHTML = "required";
					output = false;
					}
					else if(!confirmPassword.value) {
					confirmPassword.focus();
					document.getElementById("confirmPassword").innerHTML = "required";
					output = false;
					}
					if(newPassword.value != confirmPassword.value) {
					newPassword.value="";
					confirmPassword.value="";
					newPassword.focus();
					document.getElementById("confirmPassword").innerHTML = "not same";
					output = false;
					} 	
					return output;
					}
				</script>

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
        <!-- jQuery  -->
        <!-- jQuery  -->
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

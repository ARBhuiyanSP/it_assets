<div class="modal fade" id="edit<?php echo $urow['vendor_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($link,"select * from `vendors` where vendor_id='".$urow['vendor_id']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<center><h3 class = "text-success modal-title">Update Vendor</h3></center>
		</div>
		<form class="form-horizontal">
		<div class="modal-body">
		
		
			
		<div class="row">
			<div class="form-group has-success">
				<label class="col-sm-4 control-label formhead" for="state-success">Vendor Name:</label>
				<div class="col-sm-8">
					<input type  = "text" value="<?php echo $nrow['vendor_name']; ?>" id = "uvandorname" class = "form-control">
				</div>
			</div>
			
			<div class="form-group has-success">
				<label class="col-md-4 control-label formhead" for="state-success">Address:</label>
				<div class="col-md-8">
					<input type  = "text" value="<?php echo $nrow['address']; ?>" id = "uaddress" class = "form-control">
				</div>
			</div>
			
			<div class="form-group has-success">
				<label class="col-md-4 control-label formhead" for="state-success">Email:</label>
				<div class="col-md-8">
					<input type  = "text" value="<?php echo $nrow['email']; ?>" id = "uemail" class = "form-control">
				</div>
			</div>
			
			<div class="form-group has-success">
				<label class="col-md-4 control-label formhead" for="state-success">Phone:</label>
				<div class="col-md-8">
					<input type  = "text" value="<?php echo $nrow['phone']; ?>" id = "uphone" class = "form-control">
				</div>
			</div>
			
			<div class="form-group has-success">
				<label class="col-md-4 control-label formhead" for="state-success">Website:</label>
				<div class="col-md-8">
					<input type  = "text" value="<?php echo $nrow['website']; ?>" id = "uwebsite" class = "form-control">
				</div>
			</div>
			
		</div>	
			
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Update</button>
		</div>
		</form>
    </div>
  </div>
</div>
<?php
	include('config.php');
	if(isset($_POST['show'])){
		?>
		
		<table id="datatable" class = "table table-bordered">
			<thead>
				<th>Vandor ID</th>
				<th>Vandor Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Website</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$sql	= "select * from `vendors`";
						$quser = mysqli_query($link, $sql);
						
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td class=""><?php echo $urow['vendor_id']; ?></td>
									<td class=""><?php echo $urow['vendor_name']; ?></td>
									<td class=""><?php echo $urow['address']; ?></td>
									<td class=""><?php echo $urow['email']; ?></td>
									<td class=""><?php echo $urow['phone']; ?></td>
									<td class=""><?php echo $urow['web']; ?></td>
									<td>
										
										<button class="" data-toggle="modal" data-target="#edit<?php echo $urow['vendor_id']; ?>"><i class="fa fa-edit text-success"></i></button>
										<button class="delete" value="<?php echo $urow['vendor_id']; ?>"><i class="fa fa-trash text-danger"></i></button>
										<?php include('edit_modal.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>
					
					
					
					
				</tbody>
			</table>
		<?php
	}

?>




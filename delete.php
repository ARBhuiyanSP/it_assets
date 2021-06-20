<?php
	include('config.php');
	if(isset($_POST['del'])){
		
		
		$id=$_POST['id'];
		$sql = "delete from `vendors` where `vendor_id`='$id'";
		mysqli_query($link, $sql);
		
	}
?>
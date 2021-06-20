<?php
	include('config.php');
	if(isset($_POST['edit'])){
		
		$id=$_POST['id'];
		$vandorid=$_POST['vandorid'];
		$vandorname=$_POST['vandorname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$web=$_POST['website'];
		
		$sql="update `user` set vendor_id='$vandorid', vendor_name='$vandorname', address='$address', email='$email', phone='$phone', web='$web'  where vendor_id='$id'"
		mysqli_query($link, $sql);
		
		
	}
?>
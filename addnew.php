<?php
	include('config.php');
	if(isset($_POST['add'])){
		
		
		
		
		$vandorid=$_POST['vandorid'];
		$vandorname=$_POST['vandorname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$web=$_POST['website'];
		$status='1';
		
		
		$sql	=	"insert into vendors values('$vandorid','$vandorname','$address','$email','$phone','$web','$status','','')";

		mysqli_query($link, $sql);
	}


?>
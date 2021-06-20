<?php
	include('config.php');
	$id=$_GET['id'];
	mysqli_query($link,"delete from employees where id='$id'");
	header('location:employees.php');
 
?>
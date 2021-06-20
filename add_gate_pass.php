<?php
require_once("config.php");
include "phpqrcode/qrlib.php";

 
    

	$name 			= $_POST['name'];
	$address 		= $_POST['address'];
	$challan_no 	= $_POST['challan_no'];
	$quantity 		= $_POST['quantity'];
	$description 	= $_POST['description'];
	$remarks 		= $_POST['remarks'];
	$date			= date('Y-m-d');
	$status			= 'Pending';




	## Check Null Value Start
	if (empty($name) || empty($address) || empty($challan_no) || empty($quantity)) 
	{
	  echo "<script>alert('Empty fields not allowed')</script>";
	  echo "<script>location.href='gate_pass.php'</script>";
	  die();
	}
	## Check Null Value End

	$sql	=	"insert into gate_pass values('','$name','$address','$challan_no','$quantity','$description','$remarks','$date','$status','','')";

	mysqli_query($link, $sql);



	echo "<script>alert('1 Record Successfully Added')</script>";
	ECHO "<script>location.href='gate_pass.php'</script>";


?>
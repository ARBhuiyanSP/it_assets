<?php
include('config.php');

	$id 	= $_GET['id'];
	$sql	=	"DELETE FROM`ams_products` where `id`='$id'";

	mysqli_query($link, $sql);
	

echo "<script>alert('1 Record Deleted Successful')</script>";
ECHO "<script>location.href='products_list.php'</script>";

?>
<?php
include('config.php');

	$id 	= $_POST['id'];
	$disposal_date 	= $_POST['disposal_date'];
	$disposal_value = $_POST['disposal_value'];
	$reason 		= $_POST['reason'];
	$remarks 		= $_POST['remarks'];




	$sql	=	"UPDATE `disposals`  set `disposal_date`='$disposal_date',`disposal_value`='$disposal_value',`reason`='$reason',`remarks`='$remarks' where `id`='$id'";

	mysqli_query($link, $sql);



echo "<script>alert('1 Record Update Successfully')</script>";
ECHO "<script>location.href='disposal-list.php'</script>";

?>
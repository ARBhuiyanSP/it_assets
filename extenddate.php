<head>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php
require_once("config.php");

if(isset($_POST['Submit']) && !empty($_POST['Submit']) ){
    // how to save PNG codes to server 
	$id 				= $_POST['id'];
	$gate_pass 			= $_POST['gate_pass'];
	$extend_date 		= $_POST['extend_date'];


	$sql	=	"UPDATE `gate_pass`  set `return_date`='$extend_date' where `id`='$id'";
	mysqli_query($link, $sql);

	echo "<script>
			$(document).ready(function(){
			  swal({
				position: 'top-end',
				type: 'success',
				title: 'Return date has been extended',
				showConfirmButton: true
			  }).then(function() {
				window.location = 'returnview.php?id=$gate_pass';
				});
			});
		</script>";
}
?>

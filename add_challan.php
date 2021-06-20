<?php
$DB = new PDO("mysql:host=localhost;dbname=blueline", "root", "");

for($count = 0; $count<count($_POST['qty']); $count++)
{  
$challan_no 			= $_POST['challan_no'];
$date 					= $_POST['date'];
$return_date 			= $_POST['return_date'];
$totaldays 				= $_POST['totaldays'];
$type 					= $_POST['type'];
$client_name 			= $_POST['client_name'];
$ref_name 				= $_POST['ref_name'];
$po_notesheet 			= $_POST['po_notesheet'];
$po_notesheet_no 		= $_POST['po_notesheet_no'];
$po_notesheet_date 		= $_POST['po_notesheet_date'];
$wo_no              	= $_POST['wo_no'];
$wo_date 				= $_POST['wo_date'];
$product_name 			= $_POST['product_name'][$count];
$quantity 				= $_POST['qty'][$count];
$description 			= $_POST['description'][$count];
$project_name 			= $_POST['project_name'];
$location				= $_POST['location'];
$carrier_information 	= $_POST['carrier_information'];
$remarks 				= $_POST['remarks'];
$status 				= 'Rented' ;

$query = "INSERT INTO `gate_pass` (`challan_no`,`date`,`return_date`,`totaldays`,`type`,`client_name`,`ref_name`,`po_notesheet`,`po_notesheet_no`,`po_notesheet_date`,`wo_no`,`wo_date`,`product_name`,`quantity`,`description`,`project_name`,`location`,`carrier_information`,`remarks`,`status`) VALUES ('$challan_no','$date','$return_date','$totaldays','$type','$client_name','$ref_name','$po_notesheet','$po_notesheet_no','$po_notesheet_date','$wo_no','$wo_date','$product_name','$quantity','$description','$project_name','$location','$carrier_information','$remarks','$status')";
 
 $result = $DB->exec($query);
}



header("location: gate_pass_list.php");

?>
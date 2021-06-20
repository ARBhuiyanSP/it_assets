<?php


$DB = new PDO("mysql:host=localhost;dbname=ams", "root", "");

for($count = 0; $count<count($_POST['qty']); $count++)
{  
$challan_no 			= $_POST['challan_no'];
$date 					= $_POST['date'];
$return_date 			= $_POST['return_date'];
$totaldays 				= $_POST['totaldays'];
$type 					= $_POST['type'];
$client_name 			= $_POST['client_name'];


$product_name 			= $_POST['product_name'][$count];
$quantity 				= $_POST['qty'][$count];
$description 			= $_POST['description'][$count];

$project_name 			= $_POST['project_name'];
$location				= $_POST['location'];
$carrier_information 	= $_POST['carrier_information'];
$remarks 				= $_POST['remarks'];
$status 				= 'pending' ;

$query = "INSERT INTO `orders` (`challan_no`,`date`,`return_date`,`totaldays`,`type`,`client_name`,`product_name`,`quantity`,`description`,`project_name`,`location`,`carrier_information`,`remarks`,`status`) VALUES ('$challan_no','$date','$return_date','$totaldays','$type','$client_name','$product_name','$quantity','$description','$project_name','$location','$carrier_information','$remarks','$status')";
 
 $result = $DB->exec($query);
}



header("location: order-create.php");

?>
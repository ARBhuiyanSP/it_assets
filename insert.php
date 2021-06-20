<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=buttontex_pits", "root", "");

$query = "
INSERT INTO orders 
(date,party_name, party_address, party_ref, work_order_no, work_order_off, colstyle, button_line, button_hole, button_type, logo_button, quantity, rate, amount, mode, status) 
VALUES (:date, :party_name,:party_address, :party_ref, :work_order_no, :work_order_off, :colstyle, :button_line, :button_hole, :button_type, :logo_button, :quantity, :rate, :total, :mode, :status)
";

for($count = 0; $count<count($_POST['quantity']); $count++)
{
	$data = array(
		':date'	 =>	$_POST['date'],
		':party_name'	 =>	$_POST['party_name'],
		':party_address'	 =>	$_POST['party_address'],
		':party_ref'	 =>	$_POST['party_ref'],
		':work_order_no'	 =>	$_POST['work_order_no'],
		':work_order_off'	 =>	$_POST['work_order_off'],
		':colstyle'	 =>	$_POST['colstyle'][$count],
		':button_line'	 =>	$_POST['button_line'][$count],
		':button_hole'	 =>	$_POST['button_hole'][$count],
		':button_type'	 =>	$_POST['button_type'][$count],
		':logo_button'	 =>	$_POST['logo_button'][$count],
		':quantity'	 =>	$_POST['quantity'][$count],
		':rate'	 =>	$_POST['rate'][$count],
		':total' =>	$_POST['total'][$count],
		':mode' =>	$_POST['mode'],
		':status' =>	'pending'
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>
<?php 
include('config.php'); 
extract($_POST);
$user_id=$link->real_escape_string($id);
$status=$link->real_escape_string($status);
$sql=$link->query("UPDATE `gate_pass` SET `status`='$status' WHERE `id`='$id'");
echo $sql;

$sqlp = "select * from `gate_pass` where `id` = '$id'";
$resultp = mysqli_query($link, $sqlp);
$rowp=mysqli_fetch_array($resultp);
$product_id=$rowp['product_name'];

$sql2=$link->query("UPDATE `ams_products` SET `rent_status`='$status' WHERE `id`='$product_id'");
echo $sql2;
//echo 1;
?>

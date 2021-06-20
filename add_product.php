<?php
require_once("config.php");
include "phpqrcode/qrlib.php";

if(isset($_POST['Submit']) && !empty($_POST['Submit']) ){

    // how to save PNG codes to server 
     $manufacturing_sl 	= $_POST['manufacturing_sl'];
     
    $tempDir = "images/qr_images/"; 
	$todaysDate = date('Ymd');
	$model = "M".$_POST['model'];
	$id = "1";
    $codeContents = 'BLC-'.$manufacturing_sl; 
     
    // we need to generate filename somehow,  
    // with md5 or with database ID used to obtains $codeContents... 
    $fileName = time().'qrimage.png'; 
     
    $pngAbsoluteFilePath = $tempDir.$fileName; 
    $urlRelativeFilePath = EXAMPLE_TMP_URLRELPATH.$fileName; 
     
    // generating 
    if (!file_exists($pngAbsoluteFilePath)) { 
        QRcode::png($codeContents, $pngAbsoluteFilePath); 
         
    } 
    

	$sl_no 				= $_POST['sl_no'];
	$store_id 			= $_POST['store_id'];
	$assets_category 	= $_POST['assets_category'];
	$item_name 			= $_POST['item_name'];
	$assets_description = $_POST['assets_description'];
	$brand 				= $_POST['brand'];
	$model 				= $_POST['model'];
	$manufacturing_sl 	= $_POST['manufacturing_sl'];
	$rlp_no 			= $_POST['rlp_no'];
	$purchase_order 	= $_POST['purchase_order'];
	$delivery_chalan 	= $_POST['delivery_chalan'];
	$vendor_name 		= $_POST['vendor_name'];
	$purchase_date 		= $_POST['purchase_date'];
	$warrenty 			= $_POST['warrenty'];
	$purchase_value 	= $_POST['purchase_value'];
	$origin 			= $_POST['origin'];
	$custody 			= $_POST['custody'];
	$status 			= $_POST['status'];
	$condition 			= $_POST['condition'];



	if (is_uploaded_file($_FILES['slfileToUpload']['tmp_name'])) 
	  {
		$slimg=time()."_".$_FILES['slfileToUpload']['name'];
		$temp_file=$_FILES['slfileToUpload']['tmp_name'];
		
		 move_uploaded_file($temp_file,"products_photo/".$slimg);
	  }

	if (is_uploaded_file($_FILES['profileToUpload']['tmp_name'])) 
	  {
		$proimg=time()."_".$_FILES['profileToUpload']['name'];
		$temp_file=$_FILES['profileToUpload']['tmp_name'];
		
		 move_uploaded_file($temp_file,"products_photo/".$proimg);
	  }

	## Check Null Value Start
	if (empty($assets_description) || empty($manufacturing_sl) || empty($rlp_no)) 
	{
	  echo "<script>alert('Empty fields not allowed')</script>";
	  echo "<script>location.href='products_entry.php'</script>";
	  die();
	}
	## Check Null Value End

	$sql	=	"insert into `ams_products` values('','$sl_no','$assets_category','$item_name','$assets_description','$brand','$model','$manufacturing_sl','$rlp_no','','$purchase_order','$delivery_chalan','$vendor_name','$purchase_date','$warrenty','$purchase_value','$origin','$custody','$status','$condition','$slimg','$proimg','$pngAbsoluteFilePath','','','$store_id','','')";

	mysqli_query($link, $sql);
	
	/* $query = "INSERT INTO `ams_products` (`sl_no`,`assets_category`,`item_name`,`assets_description`,`brand`,`model`,`manu_sl`,`rlp_no`,`purchase_order`,`delivery_challam`,`vendor_name`,`puchase_date`,`warrenty`,`purchase_value`,`origin`,`custody`,`status`,`conditions`,`	photo`,`pro_photo`,`qr_image`,`store_id`) VALUES ('$sl_no','$assets_category','$item_name','$assets_description','$brand','$model','$manufacturing_sl','$rlp_no','$purchase_order','$delivery_chalan','$vendor_name','$purchase_date','$warrenty','$purchase_value','$origin','$custody','$status','$condition','$slimg','$proimg','$pngAbsoluteFilePath','$store_id')";
	$link->query($query); */


	echo "<script>alert('1 Record Successfully Added')</script>";
	echo "<script>location.href='products_list.php'</script>";

}
?>
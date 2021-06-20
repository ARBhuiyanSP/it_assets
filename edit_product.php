<?php
require_once("config.php");
include "phpqrcode/qrlib.php";

if(isset($_POST['Submit']) && !empty($_POST['Submit']) ){

    // how to save PNG codes to server 
    $manufacturing_sl 	= $_POST['manufacturing_sl'];
     
    $tempDir = "images/qr_images/"; 
	$todaysDate = date('Ymd');
	$model = "M".$_POST['model'];
	$id = $_POST['id'];
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



if (is_uploaded_file($_FILES['sl_prt_image']['tmp_name'])) 
				{
					$temp_file=$_FILES['sl_prt_image']['tmp_name'];
					$slimg=time().$_FILES['sl_prt_image']['name'];
					$q = move_uploaded_file($temp_file,"products_photo/".$slimg);
				}
				else
				{
				 $slimg = $_POST["sl_old_image"];
				}

if (is_uploaded_file($_FILES['pro_prt_image']['tmp_name'])) 
				{
					$temp_file=$_FILES['pro_prt_image']['tmp_name'];
					$proimg=time().$_FILES['pro_prt_image']['name'];
					$q = move_uploaded_file($temp_file,"products_photo/".$proimg);
				}
				else
				{
				 $proimg = $_POST["pro_old_image"];
				}

	## Check Null Value Start
	if (empty($assets_description) || empty($manufacturing_sl) || empty($rlp_no)) 
	{
	  echo "<script>alert('Empty fields not allowed')</script>";
	  echo "<script>location.href='products_edit.php?id=$id'</script>";
	  die();
	}
	## Check Null Value End

	
	$sql	=	"UPDATE `ams_products`  set `assets_category`='$assets_category',`item_name`='$item_name',`assets_description`='$assets_description',`brand`='$brand',`model`='$model',`manu_sl`='$manufacturing_sl',`rlp_no`='$rlp_no',`purchase_order`='$purchase_order',`delivery_challam`='$delivery_chalan',`vendor_name`='$vendor_name',`puchase_date`='$purchase_date',`warrenty`='$warrenty',`purchase_value`='$purchase_value',`origin`='$origin',`custody`='$custody',`status`='$status',`conditions`='$condition',`photo`='$slimg',`pro_photo`='$proimg',`qr_image`='$pngAbsoluteFilePath' where `id`='$id'";

	mysqli_query($link, $sql);



	echo "<script>alert('1 Record Successfully Updated')</script>";
	ECHO "<script>location.href='products_edit.php?id=$id'</script>";

}
?>
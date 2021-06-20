<?php
require_once("config.php");

$myvehicleno = $_POST['vehicleno'];
$myname = $_POST['name'];
$myregistrationno = $_POST['registrationno'];
$mytax_issdt = $_POST['tax_issdt'];
$mytax_expdt = $_POST['tax_expdt'];
$myfit_issdt = $_POST['fit_issdt'];
$myfit_expdt = $_POST['fit_expdt'];
$myins_issdt = $_POST['ins_issdt'];
$myins_expdt = $_POST['ins_expdt'];

$myrou_issdt = $_POST['rou_issdt'];
$myrou_expdt = $_POST['rou_expdt'];


$myengineno = $_POST['engineno'];
$mychasisno = $_POST['chasisno'];
$myregdate = $_POST['regdate'];


$myserialno = $_POST['serialno'];
$mymodelno = $_POST['modelno'];
$myccno = $_POST['ccno'];
$mynetvalue = $_POST['netvalue'];


$mysno = $_POST['sno'];
$mymyear = $_POST['myear'];
$myoffice = $_POST['office'];

$mydivision = $_POST['division'];
$mylocation = $_POST['location'];

$status = 'Active';


if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) 
  {
	$img=time()."_".$_FILES['fileToUpload']['name'];
	$temp_file=$_FILES['fileToUpload']['tmp_name'];
	
	 move_uploaded_file($temp_file,"vehicle_photo/".$img);
  }


## Check Null Value Start
if (empty($myserialno) || empty($myvehicleno) || empty($myname) || empty($myregistrationno)) 
{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='transport-entry.php'</script>";
  die();
}
## Check Null Value End

$sql	=	"insert into sttable values('$myvehicleno','$myname','$myregistrationno','$mytax_issdt','$mytax_expdt','$myfit_issdt','$myfit_expdt','$myins_issdt','$myins_expdt','$myrou_issdt','$myrou_expdt','$myengineno','$mychasisno','$myregdate','$myserialno','$mymodelno','$myccno','$mynetvalue','$mysno','$mymyear','$myoffice','$mydivision','$mylocation','$img','$status')";

mysqli_query($link, $sql);

/*
mysqli_query("insert into sttable values('$myvehicleno','$myname','$myregistrationno','$mytax_issdt','$mytax_expdt','$myfit_issdt','$myfit_expdt','$myins_issdt','$myins_expdt','$myrou_issdt','$myrou_expdt','$myengineno','$mychasisno','$myregdate','$myserialno','$mymodelno','$myccno','$mynetvalue','$mysno','$mymyear','$myoffice','$mydivision','$mylocation','$img')");
*/
echo "<script>alert('1 Record Successfully Added')</script>";
ECHO "<script>location.href='transport-entry.php'</script>";

?>
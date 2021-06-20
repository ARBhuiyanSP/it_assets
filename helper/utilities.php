<?php



function getDefaultCategoryCodeByStore($table, $fieldName, $modifier, $defaultCode, $prefix){
    global $link;
	$store_id	=	$_SESSION["store_id"];
    $sql    	= "SELECT count($fieldName) as total_row FROM $table WHERE store_id=$store_id";
    $result 	= $link->query($sql);
    $name   	=   '';
    $lastRows   = $result->fetch_object();
    $number     = intval($lastRows->total_row) + 1;
    $defaultCode = $prefix.sprintf('%'.$modifier, $number);
    return $defaultCode;
    
}

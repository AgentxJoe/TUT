<?php
include 'version_css_js.php';
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/database.php';


//DECALRE VARIABLE
$JSON_ARRAY_DISPLAY = array();
$dateTime_REALTIME = $_POST['dateTime_REALTIME'];
$dateTime_REALTIME_END = $_POST['dateTime_REALTIME_END'];

// DECLARE VARIABLES
//PERFORM QUERY
$qry1 = "DELETE FROM
TUT.TUT_TB
WHERE 
TUT.TUT_TB.DELETED_AT = '".$_POST['dateTime_REALTIME']."'";

if(mysqli_query($moo, $qry1))
{

}


mysqli_close($moo);
exit;

?>
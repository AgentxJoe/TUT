<?php
include 'version_css_js.php';
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/database.php';


//DECALRE VARIABLE
$JSON_ARRAY_DISPLAY = array();
$dateTime_REALTIME = $_POST['dateTime_REALTIME'];
$dateTime_REALTIME_END = $_POST['dateTime_REALTIME_END'];

if ($result = $moo -> query("
		SELECT
		TUT.TUT_TB.RID, 
		TUT.TUT_TB.INPUT_1, 
		TUT.TUT_TB.INPUT_2,
		TUT.TUT_TB.CREATED_AT,
		TUT.TUT_TB.CREATED_BY,
		TUT.TUT_TB.UPDATED_AT,
		TUT.TUT_TB.UPDATED_BY,
		TUT.TUT_TB.DELETED_AT  
		FROM 
		TUT.TUT_TB 
		WHERE  
		(
		TUT.TUT_TB.CREATED_AT BETWEEN  '".$dateTime_REALTIME."' AND '".$dateTime_REALTIME_END."' 
		OR
		TUT.TUT_TB.UPDATED_AT BETWEEN  '".$dateTime_REALTIME."' AND '".$dateTime_REALTIME_END."' 
		) 
		ORDER BY 
		TUT.TUT_TB.CREATED_AT
		")) 
		{
			// echo "Returned rows are: " . $result -> num_rows;
			$AlreadyExist = $result -> num_rows;
			if ($result -> num_rows > 0) 
			// if ($AlreadyExist >= 1) 
			{
			   while($row = $result -> fetch_row()) 
			    {
?>


<script type="text/javascript">
// FETCH REALTIME NG DATA SA TABULATOR 

var 	RID = '<?php echo $row[0] ?>';
var INPUT_1 = '<?php echo $row[1] ?>';
var INPUT_2 = '<?php echo $row[2] ?>';
var CREATED_AT = '<?php echo $row[3] ?>';
var CREATED_BY = '<?php echo $row[4] ?>';
var UPDATED_AT = '<?php echo $row[5] ?>';
var UPDATED_BY = '<?php echo $row[6] ?>';
var DELETED_AT = '<?php echo $row[7] ?>';
			if (DELETED_AT == "") {
				TABULATOR_VARIABLE.updateOrAddData([{
				id 		: 	RID
			,INPUT_1 : INPUT_1
			,INPUT_2 : INPUT_2
			,CREATED_AT : CREATED_AT
			,CREATED_BY : CREATED_BY
			,UPDATED_AT : UPDATED_AT
			,UPDATED_BY : UPDATED_BY

			}], true).then(function(row){}).catch(function(error){});

			TABULATOR_VARIABLE.setSort("CREATED_AT","desc");
			}
			else {
				TABULATOR_VARIABLE.deleteRow(RID);
			}

</script>

<?php




	    	
			    }
			}
		}








		// closing connection
		$moo->close();
		$JSON_ARRAY_DISPLAY = json_encode($JSON_ARRAY_DISPLAY);
		echo $JSON_ARRAY_DISPLAY;
		exit();


?>
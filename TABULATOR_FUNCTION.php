<?php
include 'version_css_js.php';
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/database.php';


//DECALRE VARIABLE
$JSON_ARRAY_DISPLAY = array();
$TABULATOR_DATE_SELECT = $_POST['TABULATOR_DATE_SELECT'];

if ($result = $moo -> query("
		SELECT
		TUT.TUT_TB.RID, 
		TUT.TUT_TB.INPUT_1, 
		TUT.TUT_TB.INPUT_2,
		TUT.TUT_TB.CREATED_AT,
		TUT.TUT_TB.CREATED_BY,
		TUT.TUT_TB.UPDATED_AT,
		TUT.TUT_TB.UPDATED_BY  
		FROM 
		TUT.TUT_TB 
		WHERE  
		(
		TUT.TUT_TB.CREATED_AT LIKE  '".$TABULATOR_DATE_SELECT."%' 
		OR
		TUT.TUT_TB.UPDATED_AT LIKE  '".$TABULATOR_DATE_SELECT."%'
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
			    $JSON_ARRAY_DISPLAY[]= array(
				"id" => htmlspecialchars(trim($row[0])),
				"INPUT_1" => htmlspecialchars(trim($row[1])),
				"INPUT_2" => htmlspecialchars(trim($row[2])),
				"CREATED_AT" => htmlspecialchars(trim($row[3])),
				"CREATED_BY" => htmlspecialchars(trim($row[4])),
				"UPDATED_AT" => htmlspecialchars(trim($row[5])),
				"UPDATED_BY" => htmlspecialchars(trim($row[6])),



			    );		
	    	
			    }
			}
		}








		// closing connection
		$moo->close();
		$JSON_ARRAY_DISPLAY = json_encode($JSON_ARRAY_DISPLAY);
		echo $JSON_ARRAY_DISPLAY;
		exit();


?>
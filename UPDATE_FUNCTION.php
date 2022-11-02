<?php  
$path_folder ="TUT";
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/version_css_js.php';
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/database.php';



$in_1	= $_POST['in_1'];
$in_2	= $_POST['in_2'];
$RID	= $_POST['RID'];
$AlreadyExist = '0';
// $AlreadyExist KAPAG ZERO (0) INSERT..
// $AlreadyExist KAPAG ZERO (1) RETURN TO INDEX..
// PERFORM QUERY TO VERIFY IF THE VALUE FROM YOUR FORM TO DATABASE
	if ($result = $moo -> query("
		SELECT 
		TUT.TUT_TB.INPUT_1, 
		TUT.TUT_TB.INPUT_2  
		FROM 
		TUT.TUT_TB 
		WHERE 
		TUT.TUT_TB.RID = '".$RID."' 
		ORDER BY 
		TUT.TUT_TB.RID 
		DESC LIMIT 1 
		")) 
		{
			// echo "Returned rows are: " . $result -> num_rows;
			$AlreadyExist = $result -> num_rows;
			if ($result -> num_rows > 0) 
			// if ($AlreadyExist >= 1) 
			{
			   while($row = $result -> fetch_row()) 
			    {

				$result_1 = "
				UPDATE
				TUT.TUT_TB
				SET
				TUT.TUT_TB.INPUT_1 = '".$in_1."',
				TUT.TUT_TB.INPUT_2 = '".$in_2."'
				WHERE
				TUT.TUT_TB.RID = '".$RID."'";
				if ($moo->query($result_1) === TRUE)
				{
					?>
					<script type="text/javascript">
						console.log("UPDATE SUCCESSFULLY")
							TABULATOR_VARIABLE.deleteRow(<?php echo $RID ?>);
					</script>
					<?php
				}
	    	
			    }
			}
		}


if ($AlreadyExist == '0') 
{
				?>
				<script type="text/javascript">
						console.log('NOT EXIST.');
				</script>
				<?php	
		}



	// Close mooection
	$moo->close();
    exit();


?>
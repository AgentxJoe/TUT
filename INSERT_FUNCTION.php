<?php  
$path_folder ="TUT";
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/version_css_js.php';
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/database.php';



$in_1	= $_POST['in_1'];
$in_2	= $_POST['in_2'];
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
		TUT.TUT_TB.INPUT_1 = '".$in_1."' 
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

			    		
					?>
					<script type="text/javascript">
						console.log("ALREADY EXIST.")
					</script>
					<?php		    	
			    }
			}
		}


if ($AlreadyExist == '0') 
{
	// INSERT PROCESS

		$sql = "
		INSERT INTO 
		TUT.TUT_TB 
		(
			 TUT.TUT_TB.INPUT_1
			,TUT.TUT_TB.INPUT_2
		)
		VALUES 
		(   
			 '".$in_1."'
			,'".$in_2."' 
		)";
		
		if ($moo->query($sql) === TRUE) 
		{
			?>
				<script type="text/javascript">
						console.log('INSERT SUCCESSFULLY.');
				</script>
			<?php	
		} else {
		  // echo "Error: " . $sql . "<br>" . $moo->error;
		  	?>
				<script type="text/javascript">
						console.log('MYSQL INSERT FAILED.');
				</script>
			<?php	
		}
}


	// Close mooection
	$moo->close();
    exit();


?>
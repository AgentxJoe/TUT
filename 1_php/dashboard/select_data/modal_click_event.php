<h5>
<?php 

$localhost = "localhost"; $un = "root"; $pw = ""; $dbname = "hds";
$conn1 = new mysqli($localhost, $un, $pw, $dbname);
$localhost2 = "localhost"; $un2 = "root"; $pw2 = ""; $dbname2 = "masterlist";
$conn2 = new mysqli($localhost2, $un2, $pw2, $dbname2);

$rid= $_POST['row_id'];
if ($conn1)
{
	if(($result1 = mysqli_query($conn1,"SELECT * FROM `hds_tb` WHERE `rid` LIKE '$rid' " )) !== false)
	{
        if(@mysqli_num_rows($result1) > 0) 
        {
			while($obj1 = mysqli_fetch_array($result1))
        	{
				?>
					<div style="width:25%; display: inline-table;">
				<?php
        		// echo "<td style='display:none;'>".$obj1[0]; //RID
        		echo "<b style='color: maroon;'>RFID: </b>".$obj1[1]." <br>"; //RFID
				if(($result2 = mysqli_query($conn2,"SELECT `lastname`, `firstname`, `middlename`,`company_code` FROM `masterlist_emp` WHERE `rfid` = '$obj1[1]'" )) !== false)
				{
			        if(@mysqli_num_rows($result2) > 0) 
			        {
						while($obj2 = mysqli_fetch_array($result2))
			        	{
        					echo "<b style='color: maroon;'>FULLNAME: </b>".$obj2[0]; //LASTNAME
        					echo ", ".$obj2[1]; //GIVENNAME
        					echo " ".$obj2[2]."<br>"; //MIDDLENAME
							



							if ($obj2[3]==1) 
							{
								echo "<b style='color: maroon;'>COMPANY:</b> PTPI-DIRECT <br>";
							}elseif ($obj2[3]==2) 
							{
								echo "<b style='color: maroon;'>COMPANY:</b> MISAKI <br>";
							}elseif ($obj2[3]==3)
							{
								echo "<b style='color: maroon;'>COMPANY:</b> FOUR PILLARS <br>";
							}elseif ($obj2[3]==4)
							{								
								echo "<b style='color: maroon;'>COMPANY:</b> MIGS <br>";
							} //company




			        	}
					}
					else
					{
						if (substr($obj1[1],0,1)=="V") // RFID
						{
							echo "<b style='color: maroon;'>FULLNAME: </b>".strtoupper($obj1[12].", ".$obj1[10]." ". $obj1[11])."<br>"; // 
							echo "<b style='color: maroon;'>REASON: </b>".strtoupper($obj1[13])."<br>"; // 
							echo "<b style='color: maroon;'>CONTACT PERSON: </b>".strtoupper($obj1[14])."<br>"; // 
							echo "<b style='color: maroon;'>CONTACT NO: </b>".strtoupper($obj1[15])."<br>"; // 
						}
						else
						{
							echo "<b style='color: maroon;'>FULLNAME:</b> NO RECORD <br>"; // 
						}
        					
					}
				}


				echo "<b style='color: maroon;'>TEMPERATURE: </b>".$obj1[2]." <br>"; //
        		echo "<b style='color: maroon;'>DATE CREATED: </b>".date_format(date_create($obj1[7]),"Y-m-d")." <br>"; //
        		echo "<b style='color: maroon;'>TIME CREATED: </b>".date_format(date_create($obj1[7]),"H:i:s")." <br>"; //
        		if ($obj1[3]==11) 
        		{
        			// $data_array[]=$obj1[0]."†".date_format(date_create($obj1[7]),"Y-m-d")."†"."wos";
        			// echo "<h1>NO SYMPTOMS</h1>";
        		}
        		else
        		{
				?>
						</div>
						<div style="width:70%; display: inline-table;">
					<!-- date_format(date_create($obj1[7]),"Y-m-d") -->
					<b style='color: maroon;'>IF POSITIVE, CONTACT TRACING HAS LISTED BELOW:</b><br>
					<?php
					$count=0;
						if(($result3 = mysqli_query($conn1,"SELECT `rfid`, `given_name`, `middle_name`, `surname` FROM `hds_tb` WHERE `plate_num` = '".$obj1[5]."' AND `created_at` LIKE '".date_format(date_create($obj1[7]),"Y-m-d")."%' AND 	`created_by` = '".$obj1[9]."' GROUP BY `rfid`")) !== false)
						{
					        if(@mysqli_num_rows($result3) > 1) 
					        {
								while($obj3 = mysqli_fetch_array($result3))
					        	{
					        		if ($obj1[1]==$obj3[0]) 
					        		{
					        		
					        		}
					        		else
					        		{
					        			$count++;

					        			// try
					        			// {
					        			if ($obj3[1]!='') {
					        			echo '<div style="width:32%; display: inline-table;"><b style="color: maroon;">'.$count.'.</b> '. strtoupper($obj3[3]).', '.strtoupper($obj3[1]).' '.strtoupper($obj3[2]).' (VISITOR)</div>';
					        			}
					        			else
					        			{
					        				if(($result4 = mysqli_query($conn2,"SELECT `lastname`, `firstname`, `middlename`,`company_code` FROM `masterlist_emp` WHERE `rfid` = '$obj3[0]'" )) !== false)
											{
			    							    if(@mysqli_num_rows($result4) > 0) 
			    							    {
													while($obj4 = mysqli_fetch_array($result4))
			    							    	{
			    							    		$company='';
			    							    		if ($obj4[3]==1) 
			    							    		{
			    							    			$company='PTPI-DIRECT';
			    							    		}
			    							    		elseif($obj4[3]==2) 
			    							    		{
			    							    			$company='MISAKI';
			    							    		}
			    							    		elseif($obj4[3]==3) 
			    							    		{
			    							    			$company='FOUR-PILLARS';
			    							    		}
			    							    		elseif($obj4[3]==4) 
			    							    		{
			    							    			$company='MIGS';
			    							    		}
	
					        							echo '<div style="width:32%; display: inline-table;"><b style="color: maroon;">'.$count.'.</b> '. strtoupper($obj4[0]).', '.strtoupper($obj4[1]).' '.strtoupper($obj4[2]).' ('.$company.')</div>';
					        						}
					        					}
					        					else
					        					{
											        echo '<div style="width:32%; display: inline-table;"><b style="color: maroon;">'.$count.'.</b> NO RECORD </div>';
											        
											    }	
					        				}
					        			}
					        		}
					        	}
					        }
					        else
					        {
					        	echo '<div style="width:32%; display: inline-table;"><b><h4>NO RECORD</h4></div>';
					        }
					    }


				}


						
						?>
							</div>
						<?php
        		echo "<hr>";
        		echo "<b style='color: maroon;'>HE/SHE HAVE THE FOLLOWING BELOW : </b><br>"; //



        		if ($obj1[3]==11) 
        		{
        			$data_array[]=$obj1[0]."†".date_format(date_create($obj1[7]),"Y-m-d")."†"."wos";
        			echo "<h1>NO SYMPTOMS</h1>";
        		}
        		else
        		{
        			$symptom = explode("|", $obj1[3]);
        			// echo count($symptom);

        			for ($i=0; $i < count($symptom) ; $i++) 
        			{ 

        				if (trim($symptom[$i]) == '1') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/fever.png" style="size: 50%;">
							    <br>
							    FEVER 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '2') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/headache.png" style="size: 50%;">
							    <br>
							    HEADACHE 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '3') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/fatigue.png" style="size: 50%;">
							    <br>
							    FATIGUE 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '4') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/aches_and_pains.png" style="size: 50%;">
							    <br>
							    ACHES AND PAINS 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '5') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/diarrhea.png" style="size: 50%;">
							    <br>
							    DIARRHEA 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '6') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/dry_cough.png" style="size: 50%;">
							    <br>
							    DRY COUGH 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '7') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/loss_of_smell_and_taste.png" style="size: 50%;">
							    <br>
							    LOSS OF SMELL AND TASTE 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '8') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/runny_nose.png" style="size: 50%;">
							    <br>
							    RUNNY NOSE  
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '9') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/shortness_of_breath.png" style="size: 50%;">
							    <br>
							    SHORTNESS OF BREATH 
							</div>
	        				<?php
	        			}
        				if (trim($symptom[$i]) == '10') 
	        			{
	        				?>
							<div style="width:15%; display: inline-table;">
							    <img src="/1_HDS/icon/sore_throat.png" style="size: 50%;">
							    <br>
							    SORE THROAT 
							</div>
	        				<?php
	        			}
        			}
        		}
        	}
        }
    }
}


?>
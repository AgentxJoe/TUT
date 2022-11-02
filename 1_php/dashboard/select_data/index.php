   <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="modal_click" data-toggle="modal" data-target="#myModal" style="display: none;">Open Modal</button> 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="width:70%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Health Information</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <div id="ajax_modal_result"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script> -->
<script src="/TUT/ace_assets/js1/xlsx.full.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
<script src="/TUT/ace_assets/js1/jquery-3.0.0.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> -->
<script src="/TUT/ace_assets/js1/jspdf-1.5.3.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script> -->
<script src="/TUT/ace_assets/js1/jspdf-3.5.6.plugin.autotable.min.js"></script>

 <div>
    <button id="download-csv"><img src="/TUT/CSV.png" alt="CSV" width="50" height="50"></button>
    <!-- <button id="download-json">Download JSON</button> -->
    <button id="download-xlsx"><img src="/TUT/EXCEL.png" alt="XLSX" width="50" height="50"></button>
    <!-- <button id="download-pdf"><img src="/TUT/PDF.png" alt="PDF" width="50" height="50"></button> -->
    <!-- <button id="download-html">Download HTML</button> -->
</div>

 <script type="text/javascript">
    function splitMulti(str, tokens){
        var tempChar = tokens[0]; // We can use the first token as a temporary join character
        for(var i = 1; i < tokens.length; i++){
            str = str.split(tokens[i]).join(tempChar);
                                              }
        str = str.split(tempChar);
        return str;
                                }
    function splitMultiFinal(str, tokens){
        var tempChar = tokens[0]; // We can use the first token as a temporary join character
        for(var i = 1; i < tokens.length; i++){
            str = str.split(tokens[i]).join(tempChar);
                                              }
        str = str.split(tempChar);
        return str;
                                          }
 	// var table = new Tabulator("#example-table", {
    // height:"311px",
    // layout:"fitDataFill",
    // responsiveLayout:"collapse",
    // columns:[
    // {formatter:"responsiveCollapse", width:30, minWidth:30, hozAlign:"center", resizable:false, headerSort:false},
    // {title:"Name", field:"name", width:200, responsive:0},
    // {title:"Progress", field:"progress", hozAlign:"right", sorter:"number", width:150},
    // {title:"Gender", field:"gender", width:150, responsive:2},
    // {title:"Rating", field:"rating", hozAlign:"center", width:150},
    // {title:"Favourite Color", field:"col", width:150},
    // {title:"Date Of Birth", field:"dob", hozAlign:"center", sorter:"date", width:150},
    // {title:"Driver", field:"car", hozAlign:"center", width:150},
    // ],
// });

var table = new Tabulator("#example-table", {
    height:"311px",
    movableRows:true,
    groupBy:"<?php echo $_POST['filter_group'];?>",
    // groupValues:[["green", "blue", "purple"]]
    columns:[
        {rowHandle:true, formatter:"handle", headerSort:false, frozen:true, width:30, minWidth:30},
        {formatter:"html", title:"NO.", field:"ENTRY_NO", 				 width:'1px',display:'none', frozen:true},
        {formatter:"html", title:"RFID", field:"RFID", 					 width:'auto', frozen:true, headerFilter:"input" },
        {formatter:"html", title:"LASTNAME", field:"LASTNAME", 			 width:'auto', frozen:true, headerFilter:"input" },
        {formatter:"html", title:"FIRSTNAME", field:"FIRSTNAME",	 		 width:'auto', frozen:true, headerFilter:"input" },
        {formatter:"html", title:"MIDDLENAME", field:"MIDDLENAME",		 width:'auto', frozen:true, headerFilter:"input" },
        {formatter:"html", title:"TEMPERATURE", field:"TEMPERATURE", 	 	 width:'2px', frozen:true, headerFilter:"input" },
    	{formatter : 
            function(cell, formatterParams){var value = cell.getValue();if(value == 'WITH SYMPTOMS'){
                cell.getElement().style.color ='red'; 
                //cell.getElement().style.backgroundColor ='yellow'
        }else{  cell.getElement().style.color ='green';} return value;}, title:"HEALTH STATUS", field:"HEALTH_STATUS", 	 width:'auto', headerFilter:"input" },
        {formatter:"html", title:"PLATE NUMBER", field:"PLATE_NUMBER",	 width:'auto', headerFilter:"input" },    
        {formatter:"html", title:"TRANSPORTATION", field:"TRANSPORTATION", width:'auto', headerFilter:"input" },
        {formatter:"html", title:"UPLOADER RFID", field:"UPLOADER_RFID", 	 width:'4px', headerFilter:"input" },
        {formatter:"html", title:"UPLOADER NAME", field:"UPLOADER_NAME", 	 width:'auto'},
        {formatter:"html", title:"DATE CREATED", field:"DATE_CREATED", 	 width:'auto', headerFilter:"input" },
        {formatter:"html", title:"TIME CREATED", field:"TIME_CREATED",     width:'auto', headerFilter:"input" },
        {formatter:"html", title:"DATE UPLOADED", field:"DATE_UPLOADED", 	 width:'auto', headerFilter:"input" },
// RFID
// LASTNAME
// FIRSTNAME
// MIDDLENAME
// HEALTH_STATUS
// PLATE_NUMBER
// TRANSPORTATION
// UPLOADER_RFID
// UPLOADER_NAME
// DATE_CREATED
// DATE_UPLOADED
// "UPDATE `hds_tb` SET `rfid`='" + rfid + "',`temperature`='" + temp + "',`survey_arr`='" + survey_arr + "',`user_type`='" + user_type + "',`plate_num`='" + plate_num + "',`transportation_type`='" + transportation_type + "',`created_at`='" + created_at + "',`created_by`='" + created_by + "'  WHERE `created_at` LIKE '"+ created_at.Substring(0, 13) +"%' AND `rfid` = '"+ rfid+"'"



        // {title:"Progress", field:"progress", formatter:"progress", sorter:"number"},
        // {title:"Gender", field:"gender"},
        // {title:"Rating", field:"rating", formatter:"star", formatterParams:{stars:10}, hozAlign:"center", width:"auto"},
        // {title:"Favourite Color", field:"col"},
        // {title:"Date Of Birth", field:"dob", hozAlign:"center", sorter:"date"},
        // {title:"Driver", field:"car", hozAlign:"center", formatter:"tickCross"},
    ],
rowClick:function(e, row){
    // alert("Row " + JSON.stringify(row.getData())  + " Clicked!!!!")
    var row_data=JSON.stringify(row.getData());
    row_data=row_data.replace("{","")
    row_data=row_data.replace("}","")
var row_id='';
var finalarraytext=splitMultiFinal(row_data,[':',';',',']);
// alert(finalarraytext);
for (a = 0; a < finalarraytext.length; a++) 
{
    if ('"ENTRY_NO"'==finalarraytext[a]) 
    {
        row_id=finalarraytext[a+1];
        row_id=row_id.replace('"','')
        row_id=row_id.replace('"','')
        // alert(row_id);
        $('#modal_click').click();

  $.ajax({
   url:"/TUT/1_php/dashboard/select_data/modal_click_event.php",
   method:"POST",
  cache:false,
  async:true,
  global:false,
   data:{row_id:row_id},
 complete: function() {
            
        },
        success: function( data ) {
            // Do something here.
              $('#ajax_modal_result').html(data);
        },
        error: function( data ) {
            // Do something here.
        }
  });

        // $("#ajax_modal_result").html(row_id);

    }
}


    },
    rowContext:function(e, row){
        alert("Row " + row.getIndex() + " Context Clicked!!!!")
    },



});




//trigger download of data.csv file
document.getElementById("download-csv").addEventListener("click", function(){
    table.download("csv", "data.csv");
});

//trigger download of data.json file
// document.getElementById("download-json").addEventListener("click", function(){
//     table.download("json", "data.json");
// });

//trigger download of data.xlsx file
document.getElementById("download-xlsx").addEventListener("click", function(){
    table.download("xlsx", "data.xlsx", {sheetName:"My Data"});
});

//trigger download of data.pdf file
// document.getElementById("download-pdf").addEventListener("click", function(){
//     table.download("pdf", "data.pdf", {
//         orientation:"portrait", //set page orientation to portrait
//         title:"Example Report", //add title to report
//     });
// });
//trigger download of data.html file
// document.getElementById("download-html").addEventListener("click", function(){
//     table.download("html", "data.html", {style:true});
// });
 </script>



<table id="example-table">
    <thead>
        <tr>
            <th>NO.</th>
            <th>RFID</th> 
            <th>LASTNAME</th>
            <th>FIRSTNAME</th>
            <th>MIDDLENAME</th>
            <th>TEMPERATURE</th>
            <th>HEALTH STATUS</th>
            <th>PLATE NUMBER</th>
            <th>TRANSPORTATION</th>
            <th>UPLOADER RFID</th>
            <th>UPLOADER NAME</th>
            <th>DATE CREATED</th>
            <th>TIME CREATED</th>
            <th>DATE UPLOADED</th>
        </tr>
    </thead>
    <tbody>



<?php
$from_date=$_POST['from_date'];
$to_date=$_POST['to_date'];
$option_MDY=$_POST['option_MDY'];
// echo $from_date;
// echo $to_date;
$localhost = "localhost"; $un = "root"; $pw = ""; $dbname = "hds";
$conn1 = new mysqli($localhost, $un, $pw, $dbname);
$localhost2 = "localhost"; $un2 = "root"; $pw2 = ""; $dbname2 = "masterlist";
$conn2 = new mysqli($localhost2, $un2, $pw2, $dbname2);



$res_FEVER=0;
$res_HEADACHE=0;
$res_FATIGUE=0;
$res_ACHES_AND_PAINS=0;
$res_DIARRHEA=0;
$res_DRY_COUGH=0;
$res_LOSS_OF_SMELL_AND_TASTE=0;
$res_RUNNY_NOSE=0;
$res_SHORTNESS_OF_BREATH=0;
$res_SORE_THROAT=0;
$res_NO_SYMPTOM=0;

$res_w_symptom=0;
$res_wo_symptom=0;

$date_array=array();
$w_symptom_array=array();
$wo_symptom_array=array();
$wo_symptom_array_date=array();
$w_symptom_array_date=array();
$data_array=array();
 
if ($conn1)
{
	if(($result1 = mysqli_query($conn1,"SELECT * FROM `hds_tb` WHERE `created_at` BETWEEN '$from_date%' AND '$to_date%' ORDER BY `rfid`,`created_at` DESC " )) !== false)
	{
        if(@mysqli_num_rows($result1) > 0) 
        {
			while($obj1 = mysqli_fetch_array($result1))
        	{
				echo "<tr>";
        		// // `rid`, `rfid`, `temperature`, `survey_arr`, `user_type`, `plate_num`, `transportation_type`, `created_at`, `upload_at`, `created_by`
        		echo "<td style='display:none;'>".$obj1[0]."</td>"; //RID
        		echo "<td>".$obj1[1]."</td>"; //RFID
                if (substr($obj1[1],0,1)=="V")
                {
                    echo "<td>".strtoupper($obj1[12])."</td>"; //SURNAME
                    echo "<td>".strtoupper($obj1[10])."</td>"; //GIVEN NAME
                    echo "<td>".strtoupper($obj1[11])."</td>"; //MIDDLE NAME
                }
                else
                {

				if(($result2 = mysqli_query($conn2,"SELECT `lastname`, `firstname`, `middlename`,`company_code` FROM `masterlist_emp` WHERE `rfid` = '$obj1[1]'" )) !== false)
				{
			        if(@mysqli_num_rows($result2) > 0) 
			        {
						while($obj2 = mysqli_fetch_array($result2))
			        	{
        					echo "<td>".$obj2[0]."</td>"; //LASTNAME
        					echo "<td>".$obj2[1]."</td>"; //GIVENNAME
        					echo "<td>".$obj2[2]."</td>"; //MIDDLENAME
			        	}
					}
					else
					{
        				echo "<td>NO RECORD</td>"; //LASTNAME
        				echo "<td>NO RECORD</td>"; //GIVENNAME
        				echo "<td>NO RECORD</td>"; //MIDDLENAME		
					}
				}		
            }

        		echo "<td>".$obj1[2]."</td>"; //TEMP

        		if ($obj1[3]==="11") 
        		{
        			echo "<td>NO SYMPTOMS</td>"; //SURVEY
        		}
        		else
        		{
        			echo "<td>WITH SYMPTOMS</td>"; //SURVEY
        		}
        		// echo "<td>".$obj1[3]."</td>"; //SURVEY


        		// echo "<td>".$obj1[4]."</td>"; //USER_TYPE
        		echo "<td>".$obj1[5]."</td>"; //PLATE
        		echo "<td>";
        		if($obj1[6]==='1')
        		{
        			echo "SHUTTLE SERVICE";
        		}
        		elseif($obj1[6]==='2')
        		{
        			echo "OWN VEHICLE";
        		}
        		else
        		{
        			echo "COMMUTE";
        		}
        		echo "</td>"; //TT
        		echo "<td>".$obj1[9]."</td>";  //CB
				if(($result2 = mysqli_query($conn2,"SELECT `lastname`, `firstname`, `middlename`,`company_code` FROM `masterlist_emp` WHERE `rfid` = '$obj1[9]'" )) !== false)
				{
			        if(@mysqli_num_rows($result2) > 0) 
			        {
						while($obj2 = mysqli_fetch_array($result2))
			        	{
        					echo "<td>".$obj2[1]." ".$obj2[0]."</td>"; //FIRSTNAME LASTNAME

			        	}
					}
					else
					{
        				echo "<td>NO RECORD</td>"; //LASTNAME	
					}
				}	
				echo "<td>".date_format(date_create($obj1[7]),"Y-m-d")."</td>"; //CA
                echo "<td>".date_format(date_create($obj1[7]),"H:i:s")."</td>"; //CA
        		echo "<td>".$obj1[8]."</td>"; //UA	
        		// echo "<td>".date_format(date_create($obj1[7]),"Y-m-d")."</td>"; //CA
        		// echo "<td>".date_format(date_create($obj1[8]),"Y-m-d")."</td>"; //UA
        		

				// $date_array[]=date_format(date_create($obj1[7]),"Y-m-d");

        		if ($obj1[3]==11) 
        		{
        			$data_array[]=$obj1[0]."†".date_format(date_create($obj1[7]),"Y-m-d")."†"."wos";
        			// echo "NO SYMPTOM <br>";
        			$res_wo_symptom++;

        		}
        		else
        		{
					$res_w_symptom++;
        			$symptom = explode("|", $obj1[3]);
        			// echo count($symptom);

        			for ($i=0; $i < count($symptom) ; $i++) 
        			{ 

        				if (trim($symptom[$i]) == '1') 
	        			{
	        				$res_FEVER++;
	        			}
						else if (trim($symptom[$i]) == '2') 
	        			{
	        				$res_HEADACHE++;
	        			}
	        			else if (trim($symptom[$i]) == '3') 
	        			{
	        				$res_FATIGUE++;
	        			}
	        			else if (trim($symptom[$i]) == '4') 
	        			{
	        				$res_ACHES_AND_PAINS++;
	        			}
	        			else if (trim($symptom[$i]) == '5') 
	        			{
	        				$res_DIARRHEA++;
	        			}
	        			else if (trim($symptom[$i]) == '6') 
	        			{
	        				$res_DRY_COUGH++;
	        			}
	        			else if (trim($symptom[$i]) == '7') 
	        			{
	        				$res_LOSS_OF_SMELL_AND_TASTE++;
	        			}
	        			else if (trim($symptom[$i]) == '8') 
	        			{
	        				$res_RUNNY_NOSE++;
	        			}
	        			else if (trim($symptom[$i]) == '9') 
	        			{
	        				$res_SHORTNESS_OF_BREATH++;
	        			}
	        			else if (trim($symptom[$i]) == '10') 
	        			{
	        				$res_SORE_THROAT++;
	        			}
        			}

        			$data_array[]=$obj1[0]."†".date_format(date_create($obj1[7]),"Y-m-d")."†"."ws";
        			// echo "WITH SYMPTOM <br>";
        			echo "</tr>";
        		}
				
        	}

        }
        else
        {

        }


	}

}
?>
	</tbody>
</table>

<?php

// echo $res_FEVER . "<br>";
// echo $res_HEADACHE . "<br>";
// echo $res_FATIGUE . "<br>";
// echo $res_ACHES_AND_PAINS . "<br>";
// echo $res_DIARRHEA . "<br>";
// echo $res_DRY_COUGH . "<br>";
// echo $res_LOSS_OF_SMELL_AND_TASTE . "<br>";
// echo $res_RUNNY_NOSE . "<br>";
// echo $res_SHORTNESS_OF_BREATH . "<br>";
// echo $res_SORE_THROAT . "<br>";
	if ($res_w_symptom == 0) 
	{
		 $res_NO_SYMPTOM=$res_wo_symptom;
	}

// echo var_dump($data_array);

?>




    <!--Load the AJAX API-->
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', '');
        data.addColumn('number', '');
        data.addRows([
['FEVER', <?php echo $res_FEVER ?>],
['HEADACHE', <?php echo $res_HEADACHE ?>],
['FATIGUE', <?php echo $res_FATIGUE ?>],
['ACHES AND PAINS', <?php echo $res_ACHES_AND_PAINS ?>],
['DIARRHEA', <?php echo $res_DIARRHEA ?>],
['DRY COUGH', <?php echo $res_DRY_COUGH ?>],
['LOSS OF SMELL AND TASTE', <?php echo $res_LOSS_OF_SMELL_AND_TASTE ?>],
['RUNNY NOSE', <?php echo $res_RUNNY_NOSE ?>],
['SHORTNESS OF BREATH', <?php echo $res_SHORTNESS_OF_BREATH ?>],
['SORE THROAT', <?php echo $res_SORE_THROAT ?>],
['NO SYMPTOM', <?php echo $res_NO_SYMPTOM ?>],
        ]);

// FEVER
// HEADACHE
// FATIGUE
// ACHES AND PAINS
// DIARRHEA
// DRY COUGH
// LOSS OF SMELL AND TASTE
// RUNNY NOSE
// SHORTNESS OF BREATH
// SORE THROAT
        // Set chart options
        var options = {'title':'SYMPTOMS RATE',
                       // 'width':500,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<?php 

if ($conn1)
{

	if(($result2 = mysqli_query($conn1,"SELECT COUNT(`rid`), DATE(`created_at`) DateOnly   FROM `hds_tb` WHERE `survey_arr`='11' AND `created_at` BETWEEN '$from_date%' AND '$to_date%'  GROUP BY DateOnly ORDER BY DateOnly ASC" )) !== false)
	{
        if(@mysqli_num_rows($result2) > 0) 
        {
			while($obj2 = mysqli_fetch_array($result2))
        	{
        		// echo "<br> COUNT NO SYMPTOM: ".$obj2[0]." , ".$obj2[1];
				// $wo_symptom_array[]="date:".$obj2[1].";ns:".$obj2[0];
				$wo_symptom_array_date[]=$obj2[1];


				array_push($wo_symptom_array, [
        		'date' => $obj2[1],
        		'value' => "wo:".$obj2[0]
    			]);
        	}

        }

    }

}

if ($conn1)
{

	if(($result3 = mysqli_query($conn1,"SELECT COUNT(`rid`), DATE(`created_at`) DateOnly   FROM `hds_tb` WHERE `survey_arr`!='11' AND `created_at` BETWEEN '$from_date%' AND '$to_date%'  GROUP BY DateOnly ORDER BY DateOnly ASC" )) !== false)
	{
        if(@mysqli_num_rows($result3) > 0) 
        {
			while($obj3 = mysqli_fetch_array($result3))
        	{
        		// echo "<br> COUNT WITH SYMPTOM: ".$obj3[0]." , ".$obj3[1];
        		// $w_symptom_array[]="date:".$obj3[1].";ws:".$obj3[0];
        		$w_symptom_array_date[]=$obj3[1];
        		array_push($w_symptom_array, [
        		'date' => $obj3[1],
        		'value' => "ws:".$obj3[0]
    			]);
        	}

        }

    }

}



?>
    <!--Div that will hold the pie chart-->
<script type="text/javascript">

        		  var wos = <?php echo json_encode($wo_symptom_array).""; ?>;
        		  var ws = <?php echo json_encode($w_symptom_array).""; ?>;
        		  var wos_date = <?php echo json_encode($wo_symptom_array_date); ?>;
        		  var ws_date = <?php echo json_encode($w_symptom_array_date); ?>;
        		  var from_date = "<?php echo $from_date; ?>";
        		  var to_date = "<?php echo $to_date; ?>"; 
        		  var date_option= "<?php echo $option_MDY; ?>"; 
        		  console.log(date_option);
        		  console.log(ws);
        		  console.log(wos);


var chart_date = wos_date.concat(ws_date.filter((item) =>  wos_date.indexOf(item) < 0))
var wos_ws_concat = wos.concat(ws);
console.log(wos_ws_concat);



chart_date.sort(function(date1, date2) {
   date1 = new Date(date1);
   date2 = new Date(date2);
   if (date1 > date2) return 1;
   if (date1 < date2) return -1;
})
console.log("TEST: "+ chart_date) 




function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}
 
// console.log(formatDate('May 11,2014'));



var getDaysArray = function(start, end) {
    for(var arr=[],dt=new Date(start); dt<=end; dt.setDate(dt.getDate()+1)){
        arr.push(new Date(dt));
    }
    return arr;
};

 var daylist = getDaysArray(new Date(from_date),new Date(to_date));
daylist.map((v)=>v.toISOString().slice(0,10)).join("");
// console.log(formatDate(daylist[0]))



var data = wos_ws_concat;

var newArray = data.reduce((acc, dt) => {
  var date = new Date(dt.date)
  var y = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
  var m = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
  var d = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date)
  
  var formatedDate = `${y}-${m}-${d}`
 
  var dateAcc = acc[formatedDate]
  if (!dateAcc) {
  	acc[formatedDate] = {
      date: formatedDate,
      value: [dt.value]
    }
  } else {
    // acc[formatedDate]["foo"]=dt.value
    acc[formatedDate].value.push(dt.value)
  }
  return acc
}, {})

console.log(newArray)






if (date_option==="DAILY") 
{
	var with_symptom_array = [];
	var without_symptom_array = [];

	for(i = 0;i < chart_date.length;i++)
	{
		console.log(chart_date[i])
	
		var split_ws_wo = newArray[chart_date[i]].value;
			// console.log(split_ws_wo[0] +" "+split_ws_wo[1])
			if (split_ws_wo[0].slice(0, 2)==='ws') 
			{
				with_symptom_array.push(split_ws_wo[0].slice(3));
				console.log("WS:"+split_ws_wo[0].slice(3))
			}
	
			else if(split_ws_wo[1]!=undefined)
			{
		 		if (split_ws_wo[1].slice(0, 2)==='ws') 
				{
					with_symptom_array.push(split_ws_wo[1].slice(3));
					console.log("WS:"+split_ws_wo[1].slice(3))
				}
			}
			else
			{
				with_symptom_array.push(0);
				console.log("WS:"+0)
			}
	
	
	
	
	
			if (split_ws_wo[0].slice(0, 2)==='wo') 
			{
				without_symptom_array.push(split_ws_wo[0].slice(3));
				console.log("WO:"+split_ws_wo[0].slice(3))
			}
	
			else if(split_ws_wo[1]!=undefined)
			{
		 		if (split_ws_wo[1].slice(0, 2)==='wo') 
				{
					without_symptom_array.push(split_ws_wo[1].slice(3));
					console.log("WO:"+split_ws_wo[1].slice(3))
				}
			}
			else
			{
				without_symptom_array.push(0);
				console.log("WO:"+0)
			}
	}
}

if (date_option==="MONTHLY") 
{
	var with_symptom_array = [];
	var without_symptom_array = [];
	var with_symptom_sum = 0;
	var without_symptom_sum = 0;
	var chart_date_MONTHLY=[];

	for(i = 0;i < chart_date.length;i++)
	{
		console.log(chart_date[i])
		var date = new Date(chart_date[i]);
 		var y = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(date)
 		var m = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(date)
 		var d = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(date)
  		var formatedDate = `${y}-${m}`
		chart_date_MONTHLY.push(formatedDate);
// COUNT NO SYMPTOM: 13 , 2021-08-23
// 13
// COUNT WITH SYMPTOM: 6 , 2021-08-23
// COUNT WITH SYMPTOM: 1 , 2021-08-31
// 7

// COUNT NO SYMPTOM: 2 , 2021-09-02
// 2
// COUNT WITH SYMPTOM: 1 , 2021-09-03
// 1



function calculation_WO_WS()
{
	var split_ws_wo = newArray[chart_date[i]].value;
	// console.log(split_ws_wo[0] +" "+split_ws_wo[1])
	if (split_ws_wo[0].slice(0, 2)==='ws') 
	{
		with_symptom_sum+=parseInt(split_ws_wo[0].slice(3));
		// console.log("WS:"+split_ws_wo[0].slice(3))
	}

	else if(split_ws_wo[1]!=undefined)
	{
 		if (split_ws_wo[1].slice(0, 2)==='ws') 
		{
			with_symptom_sum+=parseInt(split_ws_wo[1].slice(3));
			// console.log("WS:"+split_ws_wo[1].slice(3))
		}
	}
	else
	{
		with_symptom_sum+=parseInt(0);
		// console.log("WS:"+0)
	}





	if (split_ws_wo[0].slice(0, 2)==='wo') 
	{
		without_symptom_sum+=parseInt(split_ws_wo[0].slice(3));
		// console.log("WO:"+split_ws_wo[0].slice(3))
	}

	else if(split_ws_wo[1]!=undefined)
	{
 		if (split_ws_wo[1].slice(0, 2)==='wo') 
		{
			without_symptom_sum+=parseInt(split_ws_wo[1].slice(3));
			// console.log("WO:"+split_ws_wo[1].slice(3))
		}
	}
	else
	{
		without_symptom_sum+=parseInt(0);
		// console.log("WO:"+0)
	}
}








		try
		{
				if (chart_date[i+1].includes(formatedDate)) 
				{
					calculation_WO_WS()
				}
				else
				{
					calculation_WO_WS()
					console.log(with_symptom_sum)
					console.log(without_symptom_sum)
					with_symptom_array.push(with_symptom_sum)
					without_symptom_array.push(without_symptom_sum)
					with_symptom_sum=0;
					without_symptom_sum=0;
				}
		}
		catch
		{
			calculation_WO_WS()
			console.log(with_symptom_sum)
			console.log(without_symptom_sum)
			with_symptom_array.push(with_symptom_sum)
			without_symptom_array.push(without_symptom_sum)
			console.log(with_symptom_array)
			console.log(without_symptom_array)
	
		}

	}


	var uniqueDates_MONTHLY = [];
	$.each(chart_date_MONTHLY, function(i, el){
	    if($.inArray(el, uniqueDates_MONTHLY) === -1) uniqueDates_MONTHLY.push(el);
	});
	console.log(uniqueDates_MONTHLY)
}








google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() 
{
    // Some raw data (not necessarily accurate)
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'NO SYMPTOM');
    data.addColumn('number', 'NO SYMPTOM AVG');
    data.addColumn('number', 'W/ SYMPTOM');
    data.addColumn('number', 'W/ SYMPTOM AVG');
	
	if (date_option==="DAILY") 
	{
		for(i = 0;i < chart_date.length;i++)
		{
			data.addRow([
			formatDate(chart_date[i]),
			parseInt(without_symptom_array[i]),
			(parseInt(without_symptom_array[i])/(parseInt(without_symptom_array[i])+parseInt(with_symptom_array[i]))*100),
			parseInt(with_symptom_array[i]),
			(parseInt(with_symptom_array[i])/(parseInt(without_symptom_array[i])+parseInt(with_symptom_array[i]))*100)])
		}
	}
	else
	{
		for(i = 0;i < uniqueDates_MONTHLY.length;i++)
		{ 
			data.addRow([
			String(uniqueDates_MONTHLY[i]),
			parseInt(without_symptom_array[i]),
			(parseInt(without_symptom_array[i])/(parseInt(without_symptom_array[i])+parseInt(with_symptom_array[i]))*100),
			parseInt(with_symptom_array[i]),
			(parseInt(with_symptom_array[i])/(parseInt(without_symptom_array[i])+parseInt(with_symptom_array[i]))*100)])
		}
	}

data.addRows(i+1);

        // data.addRow(['2004/05',165,(165/(165+90)*100),90,(90/(165+90)*100)]);
        // data.addRow(['2004/05',165,(165/(165+90)*100),90,(90/(165+90)*100)]);

        var options = 
        {	'height':500,
			title : date_option+' HEALTH DECLARATION RECORD',
			vAxis: {title: date_option},
			hAxis: {title: ''},
			seriesType: 'bars',
			series: {
          	0: {type: 'bars',color:'#008000'},
          	1: {type: 'line',color:'#008000'}, //1e90ff
          	2: {type: 'bars',color:'#B22222'},
          	3: {type: 'line',color:'#B22222'}, //000000
          			},
            annotations: 
            {
    			boxStyle: 
    			{
    				// Color of the box outline.
    				stroke: '#888',
    				// Thickness of the box outline.
    				strokeWidth: 1,
    				// x-radius of the corner curvature.
    				rx: 10,
    				// y-radius of the corner curvature.
    				ry: 10,
    				// Attributes for linear gradient fill.
    				gradient:
    				{
       					// Start color for gradient.
       					color1: '#fbf6a7',
       					// Finish color for gradient.
       					color2: '#33b679',
       					// Where on the boundary to start and
       					// end the color1/color2 gradient,
       					// relative to the upper left corner
       					// of the boundary.
       					x1: '0%', y1: '0%',
       					x2: '100%', y2: '100%',
       					// If true, the boundary for x1,
       					// y1, x2, and y2 is the box. If
       					// false, it's the entire chart.
       					useObjectBoundingBoxUnits: true
      				}
    			}
  			}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
}
    </script>

 




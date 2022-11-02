

var TABULATOR_VARIABLE ='';
    //define custom accessor
var customAccessor = function(value, data, type, params, column){
    //value - original value of the cell
    //data - the data for the row
    //type - the type of access occurring  (data|download|clipboard)
    //params - the accessorParams object passed from the column definition
    //column - column component for the column this accessor is bound to

return Math.floor((Math.round(value * 100) / 100).toFixed(4));
    // return Math.floor(value); //return the new value for the cell data.
}


    TABULATOR_VARIABLE = new Tabulator("#TABULATOR_HTML", {
    // data:JSON.parse(array_result),
    height:"510px",
    width:"auto",
     layout:"fitData",
    placeholder:"NO DATA RECORD", //display message to user on empty table
    autoResize:true, 
    movableRows:false,
    groupToggleElement:"header",
    groupStartOpen:true,
        downloadConfig:{
        columnGroups:false, //include column groups in column headers for download
        rowGroups:false, //do not include row groups in download
    },
    columns:[
        {title: "NO.", formatter:"rownum", width:'auto',download:false},
        {title:"RID", field:"id", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"INPUT_1", field:"INPUT_1", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"INPUT_2", field:"INPUT_2", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"CREATED_BY", field:"CREATED_BY", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"CREATED_AT", field:"CREATED_AT", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"UPDATED_BY", field:"UPDATED_BY", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
        {title:"UPDATED_AT", field:"UPDATED_AT", width:'auto', frozen:false, visible:true, resizable:true, headerFilter:"input", formatter:"html"},
       
    ],
    rowClick:function(e, row)
    {
        var data=row.getData();
        var id = data.id;
        var INPUT_1 = data.INPUT_1;
        var INPUT_2 = data.INPUT_2;
        var CREATED_BY = data.CREATED_BY;
        var CREATED_AT = data.CREATED_AT;
        var UPDATED_BY = data.UPDATED_BY;
        var UPDATED_AT = data.UPDATED_AT;
     console.log(id);
     console.log(INPUT_1);
     console.log(INPUT_2);
     console.log(CREATED_BY);
     console.log(CREATED_AT);
     console.log(UPDATED_BY);
     console.log(UPDATED_AT);

     localStorage.RID = id;
     $('#in_1').val(INPUT_1);
     $('#in_2').val(INPUT_2);
        
    $("#I_div").hide();
    $("#UDC_div").show();




    },

    rowContext:function(e, row)
    {

    },
                                                    }); 

    TABULATOR_VARIABLE.setSort("CREATED_AT", "desc");







// REALTIME INTERVAL AJAX FUNCTION

         var myIntervaldateTime_sec = setInterval(function () {

                // console.log("IN_realtime: "+ localStorage.dateTime_REALTIME);
                // console.log("IN_del_func: "+ localStorage.dateTime_delete_from_database);
                $.ajax({
                url:'/TUT/REALTIME_INSERT_UPDATE.PHP',  
                method:"POST",  
                data:
                    {
                        dateTime_REALTIME : localStorage.dateTime_REALTIME,
                        dateTime_REALTIME_END : localStorage.dateTime_REALTIME_END
                    }, 
                success:function(data) 
                    {  
                        //console.log(data);
                        $('#AJAX_RESULT').html(data);
                        //TRANSFER InsertEncodeData.php VALUE TO ID DIV_1
                        // if (data.trim() =='') {}else{console.log(data)}
                     
                    }// success:function(data) 
                    });// $.ajax(
   
                $.ajax({
                url:'/TUT/REALTIME_DELETE.PHP',  
                method:"POST",  
                data:
                    {
                        dateTime_REALTIME : localStorage.dateTime_REALTIME,
                        dateTime_REALTIME_END : localStorage.dateTime_REALTIME_END
                    }, 
                success:function(data) 
                    {  
                        // console.log(data);
                        $('#AJAX_RESULT').html(data);
                        //TRANSFER InsertEncodeData.php VALUE TO ID DIV_1
                        //  if (data.trim() =='') {}else{console.log(data)}
                    }// success:function(data) 
                    });// $.ajax(
    }, 1000);
    localStorage.myInterval=myIntervaldateTime_sec;










// DATA FOR DISPLAY


$("#TABULATOR_DATE_SELECT").on("change", function()
{
    var TABULATOR_DATE_SELECT = $("#TABULATOR_DATE_SELECT").val();
    SHOW_TABULATOR_VARIABLE_DATA(TABULATOR_DATE_SELECT);
});



$("#TABULATOR_DATE_SELECT").trigger("change");


function SHOW_TABULATOR_VARIABLE_DATA(TABULATOR_DATE_SELECT)
{

    $.ajax(
    {
      url:'/TUT/TABULATOR_FUNCTION.PHP', 
      method:"POST",  
      data:{
        TABULATOR_DATE_SELECT : TABULATOR_DATE_SELECT
      }, 
      cache: false,
      success:function(data) 
      {  
    
        var AJAX_TABULATOR_VARIABLE=[]; //[{}] 

        AJAX_TABULATOR_VARIABLE.push(data); // DATA STRING CONVERT TO PUSH ARRAY.
        TABULATOR_VARIABLE.clearData();
        console.log(data);
   
        TABULATOR_VARIABLE.setData(JSON.parse(AJAX_TABULATOR_VARIABLE))
        .then(function(){
      
        })
        .catch(function(error){
         
        });
      }
    });
}



// // trigger download of data.csv file
// document.getElementById("SCAN_IN-csv").addEventListener("click", function(){
//     $("#SCAN_IN-csv").prop("disabled",true);
//     TABULATOR_VARIABLE.download("csv", "SCAN_IN_LIST"+localStorage.dateTime_REALTIME+".csv");
//     $("#SCAN_IN-csv").prop("disabled",false);
// });


// //trigger download of data.xlsx file
// document.getElementById("SCAN_IN-xlsx").addEventListener("click", function(){
//     $("#SCAN_IN-xlsx").prop("disabled",true);
//     TABULATOR_VARIABLE.download("xlsx", "SCAN_IN_LIST"+localStorage.dateTime_REALTIME+".xlsx", {sheetName:"SCAN_IN_LIST"});
//     $("#SCAN_IN-xlsx").prop("disabled",false);
// });



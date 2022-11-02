
$('#delete_btn').on("click",function(){

var RID  = localStorage.RID;
var dateTime_DELETE_DB  = localStorage.dateTime_DELETE_DB;
        
$.ajax({
          type: 'POST',
          url: '/TUT/DELETE_FUNCTION.PHP',
          data: 
          {

            RID : RID,
            dateTime_DELETE_DB : dateTime_DELETE_DB
          },
          cache: false,
          success: function(data)
          {
            $("#AJAX_RESULT").html(data);
            console.log("[RESULT SUCCESS] "+data);
          },
          error: function(data)
          {
            $("#AJAX_RESULT").html(data);
             // $("#AJAX_RESULT").html("");
              console.log("[RESULT ERROR] "+data);
          }
  });




});


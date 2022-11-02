
$('#update_btn').on("click",function(){

var RID  = localStorage.RID;
var in_1 = $('#in_1').val();
var in_2 = $('#in_2').val();
        
$.ajax({
          type: 'POST',
          url: '/TUT/UPDATE_FUNCTION.PHP',
          data: 
          {
             in_1 : in_1
            ,in_2 : in_2
            ,RID : RID
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




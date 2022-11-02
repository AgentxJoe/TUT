$("#in_btn").on('click',function()
{

var in_1 =  $("#in_1").val();
var in_2 =  $("#in_2").val();

console.log(in_1);
console.log(in_2);



// == EQUAL EQUAL IF TWO VALUES ARE EQUAL.
// === EQUAL EQUAL IF TWO VALUES ARE EQUAL AND ELEMENT TYPE.
// != NOT EQUAL IF TWO VALUES ARE DIFF.
if(in_1 == "")
{
console.log("Enter text.");
$("#in_1").focus();
return true;
}


if(in_2 == "")
{
console.log("Enter text.");
$("#in_2").focus();
return true;
}


 $.ajax({
          type: 'POST',
          url: '/TUT/INSERT_FUNCTION.PHP',
          data: 
          {
             in_1 : in_1
            ,in_2 : in_2
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
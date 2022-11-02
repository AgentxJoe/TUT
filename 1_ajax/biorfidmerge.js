  function biorfidmerge(){ 
  $.ajax({
   url:"/timekeeping/1_php/biorfidmerge.php",
   method:"POST",
   // data:{un:un,pw:pw},
   success:function(data){
    // alert(data);
  $('#biorfidmerge').html(data);
   },
complete: function(){

      }
  });
}

biorfidmerge();

// $("#r1_drlist").click(function(){
// biorfidmerge();
// });
<?php

include $_SERVER['DOCUMENT_ROOT'].'/1_HDS/3_home/link_js_css.php';
include $_SERVER['DOCUMENT_ROOT'].'/1_HDS/3_home/conn2.php'
// https://codepen.io/warcas/pen/urbnj
?>

<link rel="stylesheet" type="text/css" href="/1_HDS/3_home/js/datatables.min.css"/>
<script type="text/javascript" src="/1_HDS/3_home/js/pdfmake.min.js"></script>
<script type="text/javascript" src="/1_HDS/3_home/js/vfs_fonts.js"></script>
<script type="text/javascript" src="/1_HDS/3_home/js/datatables.min.js"></script>
<script src="/1_HDS/3_home/js/all.js"></script>
<link rel="stylesheet" href="/1_HDS/3_home/js/all.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/1_HDS/3_home/js/jquery-3.4.0.js"><\/script>')</script>
<script src="/1_HDS/3_home/js/jquery-3.4.0.js"></script>
<script src="/1_HDS/3_home/js/jquery-3.4.0.min.js"></script>


<!doctype html>
<html lang="en">
  <head>

<link rel="apple-touch-icon" sizes="180x180" href="/1_HDS/3_home/logo/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/1_HDS/3_home/logo/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/1_HDS/3_home/logo/favicon-16x16.png">
<link rel="manifest" href="/1_HDS/3_home/logo/site.webmanifest">
<!-- <link rel="shortcut icon" href="/1_HDS/3_home/logo/cropped-favicon.png" /> -->
<!-- <link rel="icon" sizes="auto" href="/1_HDS/3_home/logo/logo.png"> -->
<!-- <link rel="manifest" href="/1_HDS/3_home/logo/site.webmanifest"> -->
<!-- <link rel="icon" sizes="16x16" href="/1_HDS/3_home/logo/favicon.ico"> -->
<!-- <link rel="apple-touch-icon" sizes="180x180"href="/1_HDS/3_home/logo/logo.png"> -->
<!--         <link rel="shortcut icon" href="/1_HDS/3_home/M/ace_assets/img/Icons/1.ico" sizes="64x64" style="image-rendering: auto;">
 -->
    <!-- <link rel="shortcut icon" href="/1_HDS/3_home/M/ace_assets/img/Icons/1.ico" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nil Tenorio">
    <meta name="generator" content="1_HDS System v1.0">
    <title>HEALTH DECLARATION SYSTEM</title>
<?php include $_SERVER['DOCUMENT_ROOT'].'/1_HDS/3_home/link_js_css.php'; ?>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/"> -->

    <!-- Bootstrap core CSS -->
<link href="/1_HDS/3_home/assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
  body{
         font-family: Microsoft Sans Serif;
         background-image: url('/1_HDS/3_home/logo/PRIMATECHPHILSFRONT.jpg');
         background-repeat: no-repeat;
         background-size: 100% 100%;
         background-attachment: fixed;
         text-align: justify;
         text-justify: inter-word;
  }
favicon.ico
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


    </style>
    <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
    <link href="/1_HDS/3_home/floating-labels.css" rel="stylesheet">
  </head>
  <body class="inner cover lead">


  <?php
include $_SERVER['DOCUMENT_ROOT'].'/1_HDS/2_css/loader.php'
  ?>




<!-- d-flex -->
    <form id="form_login" class="form-signin cover-container w-100 h-100 p-3 mx-auto flex-column" >
  <div class="text-center mb-4">
    <img class="mb-4" src="/1_HDS/3_home/logo/logo.png" alt="" width="350" height="200">
    <h1 class="h5 mb-3 font-weight-normal" style="margin-top: -50px; color: black; text-shadow: gray 0.5px 0.5px; font-weight:bolder;">Health Declaration System</h1>
     <small style="padding: 0px;margin: 0px;"><i>1.0.0</i></small>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputUserID" class="form-control un" placeholder="User ID" required autofocus>
    <label for="inputEmail">User ID</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control pw" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>
  <div class="form-label-group">
<!-- <center><i><a href="#forgotpassword.php">Forgot password?</a> | <a href="#register.php">Register Account</a></i></center> -->
  </div>
  <!-- <div class="checkbox mb-3"> -->
    <!-- <label> -->
      <!-- <input type="checkbox" value="remember-me"> Remember me -->
    <!-- </label> -->
  <!-- </div> -->
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
<!-- text-muted -->
  <h5 class="mt-5 mb-3  text-center" style="color: black; text-shadow: gray 0.5px 0.5px; font-weight:bolder;">Developed by HRGA Department<br>&copy;2021</h5>
</form>




</body>
</html>

<script src="/1_HDS/3_home/AES_MNv1.js"></script>
<script type="text/javascript">
  $('form').on('submit', function (e) {

          e.preventDefault();

var un=$('.un').val();
var pw=$('.pw').val();
$('#form_login').hide();
  $('.page-loader').show();
$.ajax({
   url:"/1_HDS/3_home/PHP_login.php",
   method:"POST",
   data:{un:un,pw:pw},
   success:function(data){
    // alert(data);
  $('#div_PHP_Login').html(data);
   },
complete: function(){
  $('#form_login').show();
    $('.page-loader').hide();
      }

  });

  });




</script>

<div id="div_PHP_Login"></div>
<script type="text/javascript">

  var uid = localStorage.uid;
  // console.log(uid)
if (typeof uid == 'undefined' && uid == null){

}
else{
  setTimeout(function(){  window.location.assign("/1_HDS/") }, 100);
}
// window.onresize = function() 
// {
//  window.resizeTo(500,500);
// }
// window.onclick = function() 
// {
//   window.resizeTo(500,500);
// }
localStorage.setItem('ace_state_id-ace-settings-navbar','{"checked":true}'); 
localStorage.setItem('ace_state_id-navbar','{"class":{"navbar-fixed-top":1}}'); 
localStorage.setItem('ace_state_id-sidebar-toggle-icon','{"class":{"className":"ace-save-state ace-icon fa fa-angle-double-right"}}');
localStorage.setItem('ace_state_id-sidebar','{"class":{"sidebar-fixed":1,"menu-min":1}}');  
  
localStorage.setItem('ace_state_id-ace-settings-navbar','{"checked":true}');
localStorage.setItem('ace_state_id-ace-settings-sidebar','{"checked":true}');
localStorage.setItem('ace_state_id-ace-settings-breadcrumbs','{"checked":true}');
  localStorage.setItem('ace_state_id-breadcrumbs','{"class":{"breadcrumbs-fixed":1}}');
// localStorage.setItem('ace_state_id-sidebar','{"class":{"sidebar-fixed":1}}');

</script>

<!DOCTYPE html>
<html lang="en" style="font-family: century gothic;">
  <head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<link rel="shortcut icon" href="/TUT/M/ace_assets/img/logo1.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nil Tenorio">
    <meta name="generator" content="HDS v1.0">
    <title>HEALTH DECLARATION SYSTEM</title>
<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<?php include $_SERVER['DOCUMENT_ROOT'].'/TUT/2_css/index.php'; ?>

  </head>

<link rel="stylesheet" href="/TUT/ace_assets/css/tabulator.min.css" />

<script src="/TUT/ace_assets/js1/jquery191.min.js"></script>
<script src="/TUT/ace_assets/js1/tabulator.min.js"></script>
<script src="/TUT/ace_assets/js1/jspdf.min.js"></script>
<script src="/TUT/ace_assets/js1/jspdf.plugin.autotable.js"></script>
<script src="/TUT/ace_assets/js1/jquery-3.3.1.min.js"></script>
<script src="/TUT/ace_assets/js1/xlsx.full.min.js"></script>
<script src="/TUT/ace_assets/js1/jquery-3.0.0.min.js"></script>
<script src="/TUT/ace_assets/js1/jspdf-1.5.3.min.js"></script>
<script src="/TUT/ace_assets/js1/jspdf-3.5.6.plugin.autotable.min.js"></script>
<!-- <script src="/TUT/M/ace_assets/assets/js/ace-extra.min.js"></script>
<script type="text/javascript" src="/TUT/M/ace_assets/jsnil/jquery-2.1.1.min.js"></script> -->
<!-- <link href="https://unpkg.com/tabulator-tables@4.2.7/dist/css/tabulator.min.css" rel="stylesheet">
<script src="https://unpkg.com/tabulator-tables@4.2.7/dist/js/tabulator.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.5/jspdf.plugin.autotable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  <body class="no-skin" style="margin-right: 5px;padding: 0px;">
    <div id="navbar" class="navbar navbar-default          ace-save-state" style="background-color: #2234ae;
background-image: linear-gradient(315deg, #191714 -120%,  #2234ae 120%);">
      <div class="navbar-container ace-save-state" id="navbar-container"  >
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar" style="background-color: darkblue; border: 0.5px solid black;">
          <span class="sr-only">Toggle sidebar</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
          <asd class="navbar-brand">
            <small>

              <!-- <i class="fa fa-leaf"></i> -->
              <h1  id="litheader" style="font-size: 20px; font-weight: bolder; margin: 0;padding: 0;  display: inline-block; font-family: Century Gothic;"><span class="white" id="id-text2" >PRIMA TECH PHILS., INC. </span></h1>
            </small>
          </asd>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation" >
          <ul class="nav ace-nav pull-right">
            <li class="purple dropdown-modal" style="display: none;">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                <span class="badge badge-important">8</span>
              </a>
              <?php 
              // include  'pages/notif.php';
               ?>
            </li>
            <!-- <li class="light-blue dropdown-modal" style="border: none;"> -->
              <!-- <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="background-color: transparent;margin-left: 240px; font-family: Century Gothic;"> -->
                <!-- <img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Photo" /> -->
<!--                 <img class="nav-user-photo sharpenMore" src="../../img/logo1.png" alt="Photo" style="  object-fit: fill;  image-rendering: crisp-edges; border: 0px ridge red;" />
                <span class="user-info">
                  <small>Welcome,</small>
                  <user_name>User Account</user_name>
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
              </a> -->

<!--               <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li style="background-image: linear-gradient(to right, lightblue 0%, white 51%, lightblue 100%); ">
                  <a href="#">
                    <i class="ace-icon fa fa-star darkblue" style="text-shadow: 0.5px 0.5px 0.5px black;"></i>
                    <div  id="usertype" style="display: inline;color: black;text-shadow:0.5px 0.5px 0.5px white;">Usertype</div>
                  </a>
                </li> -->

<!--                <li>
                  <a href="#profile.html">
                    <i class="ace-icon fa fa-user"></i>
                    Profile
                  </a>
                </li> -->

                <!-- <li class="divider"></li> -->

                <li>
                  <a href="#" id="logout">
                    <i class="ace-icon fa fa-power-off"></i>
                    Logout
                  </a>
                </li>
<!--               </ul>
            </li>
          </ul> -->

        </div>
      </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
      </script>
      
      <div id="sidebar" class="sidebar responsive ace-save-state menu-min">
      <!-- <div id="sidebar" class="sidebar responsive ace-save-state"> -->
        <script type="text/javascript">
          try{ace.settings.loadState('sidebar')}catch(e){}
        </script>



        <ul class="nav nav-list">
          <li id="li_1">
            <a href="/TUT/">
              <i class="menu-icon fa fa-bar-chart home-icon"></i>
              <span class="menu-text"> DASHBOARD </span>
            </a>
            <b class="arrow"></b>
          </li>
<!--           <li  id="li_2">
            <a href="/TUT/3_worksched/">
              <i class="menu-icon  fa  fa-pencil-square-o home-icon"></i>
              <span class="menu-text"> WORK SCHEDULER </span>
            </a>
            <b class="arrow"></b>
          </li>
          <li  id="li_3">
            <a href="/TUT/3_attendance/">
              <i class="menu-icon  fa  fa-calendar-check home-icon"></i>
              <span class="menu-text"> ATTENDANCE </span>
            </a>
            <b class="arrow"></b>
          </li> -->

<!--           <li id="li_3">
            <a href="#/TUT/3_biodata/">
              <i class="menu-icon"><i class="fas fa-fingerprint"></i></i>
              <span class="menu-text"> BIOMETRICS DATA </span>
            </a>
            <b class="arrow"></b>
          </li>
          <li id="li_4">
            <a href="#/TUT/3_rfiddata/">
              <i class="menu-icon"><i class="fas fa-id-badge"></i></i>
              <span class="menu-text"> RFID DATA </span>
            </a>
            <b class="arrow"></b>
          </li> -->
<!--           <li id="li_5">
            <a href="/TUT/3_discrepancy/">
              <i class="menu-icon"><i class="fas fa-balance-scale"></i></i>
              <span class="menu-text"> DISCREPANCY</span>
            </a>
            <b class="arrow"></b>
          </li>
          <li id="li_6">
            <a href="/TUT/3_masterlist/">
              <i class="menu-icon"><i class="fas fa-address-card"></i></i>
              <span class="menu-text"> MASTERLIST</span>
            </a>
            <b class="arrow"></b>
          </li>
 -->

        </ul>
        <!-- /.nav-list id="sidebar-collapse" -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
          <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
      </div>


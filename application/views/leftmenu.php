<style>
  .menubar ul li:hover .submenu{
   display:block;
   position:absolute;
   margin-top:15px;
   margin-left:-15px;
  }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url();?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="x-author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="robots" content="noodp">
    <title>GOPALGONJ POLYTECHNIC INSTITUTE</title>
    <link rel="shortcut icon" href="assets_one/img/favicon.ico" type="image/x-icon"/>
    <link href="assets_one/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="assets_one/css/flexslider.css" rel="stylesheet"/>
    <link href="assets_one/css/animate.css" rel="stylesheet"/>
    <link href="assets_one/css/slick.css" rel="stylesheet">
    <link href="assets_one/css/slick-theme.css" rel="stylesheet">
    <link href="assets_one/css/jquery.fs.boxer.css" rel="stylesheet">
    <link rel="stylesheet" href="assets_one/css/mobilenav.css">
    <!-- Theme skin -->
    <link href="assets_one/skins/default.css" rel="stylesheet"/>
    <link href="assets_one/css/style.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="assets_one/css/bn.css"> -->
            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 <!--  <link rel="stylesheet" media="screen,projection" type="text/css" href="datepicker/jquery-ui.css" /> -->
  <!--<script src="datepicker/jquery-1.9.1.js"></script>--> 

 <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
  
  <!--- picture uplaod js ---->
  <script type="text/javascript" src="library/upload/ajaxupload.js"></script>
  
  <!--- ajax request function for data serching----->
  <script type="text/javascript" src="library/ajax_req.js"></script>
  
<!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
  <script src="js/google.js"></script>

  <!-- <style>
    body{color:font-family:solaimanlipi, "Times New Roman", Times, serif !important; color:black !important;}
  </style> -->

</head>
<body onload="onload_hide_fun();">
    <div id="wrapper">
        <!-- start header -->
        <header style="padding-left:120px;">
        <!--         <div class="main-header wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="main-menu-area" data-spy="affix" data-offset-top="150">
                    <div class="container headwidth"> -->
                          <!--   <div class="navbar-header navbar-left">
                                <div class="navbar-brand">
                                    <a href="">
                                    <img src="logo_images/logo.png" alt="" >
                                    <span><?php echo $all_data->full_name;?></span>
                                    </a>
                                </div>
                            </div> -->
                            <div class="menubar" style="height:90px;width:90%;background:#FAE5D3;padding-left:30px;">
                            <nav id="elg-main-menu" role="navigation" class="elg-menu pull-right"style="padding-left:20px">
                                    <ul >
                                        <li><a href="Home/demo"><img src="assets/img/aaa.png" class="img-responsive" style="height:30px;width:30px" ></a></li>
                                        <li><a href="javascript:void(0)"style="font-size:20px">About Us</a>
                                            <ul class="sub-menus">
                                                <li><a href="About/mission">Mission & Vision</a></li>                                           
                                                <li><a href="About/history">History Of SPI</a></li>                                           
                                                                                          
                                            </ul>
                                        </li> 
                    <li><a href="javascript:void(0)"style="font-size:20px">Notice</a>
                                            <ul class="sub-menus">
                                                <li><a href="Notice/internal">Internal Notice</a></li>                                           
                                                <li><a href="Notice/board">Board Notice</a></li>                                           
                                                                                       
                                            </ul>
                                        </li>
                
                    <li><a href="javascript:void(0)"style="font-size:20px">Dept</a>
                                            <ul class="sub-menus menusextra">
                                                <li><a href="Student/cstudentlist">Computer</a></li>                                           
                                                <li><a href="Student/estudentlist">Electronics</a></li>                                           
                                                <li><a href="Student/cvstudentlist">Civil</a></li>                                           
                                                <li><a href="Student/rcstudentlist">Refrigration & Air Condition</a></li>                                           
                                                <li><a href="Student/elstudentlist">Electrical </a></li>                                         
                                                <li><a href="Student/rsstudentlist">RS </a></li>                                           
                                                
                                           </ul>
                                        </li>
                    <li><a href="javascript:void(0)"style="font-size:20px">Academic</a>
                                            <ul class="sub-menus">
                                                <li><a href="Academic/routine">Class Routine</a></li>                                           
                                                <li><a href="Academic/syllebus">Syllabus</a></li>                                           
                                                <li><a href="Academic/probidhan">Probidhan</a></li>                                           
                                            </ul>
                                        </li>
                    
                                        <li><a href="javascript:void(0)"style="font-size:20px">Registration</a>
                                            <ul class="sub-menus">
                                                <li><a href="Registration/newregistration">New Student Registration</a></li>                                           
                                                                                          
                                            </ul>
                                        </li>
                                                                         
                               
                          

                    <li><a href="javascript:void(0)"style="font-size:20px">Stipent</a>
                                            <ul class="sub-menus">
                                                <li><a href="Stipent/account">Add Bkash/Agrani Bank Account</a></li>                                           
                                                <li><a href="Stipent/sprofile">Student Profile</a></li>                                           
                                                                                         
                                            </ul>
                                        </li>
                    <li><a href="Staff/stafflist"style="font-size:20px">Staff</a>
                                                                                
                                          
                                        </li>
                    <li><a href="javascript:void(0)"style="font-size:20px">Gallery</a>
                                            <ul class="sub-menus">
                                                <li><a href="Gallery/photo">Photo Gallery</a></li>                                           
                                                <li><a href="Gallery/vedio">Video Gallery</a></li>                                           
                                                                                      
                                            </ul>
                                        </li>
                    <li><a href="Contact/demo"style="padding-right:110px;font-size:20px">Contract Us</a>
                                        
                                        </li>
                    
                                                                          
                    </ul>
                </nav>
              </div>
                            </div>

                </header>
   <!-- end header
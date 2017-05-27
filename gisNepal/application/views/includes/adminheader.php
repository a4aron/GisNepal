<?php if($this->session->userdata('userID')){?>
 <!-- <p> You are logged in </p>
  <p><a href="<?=base_url()?>users/logout">Logout</a></p> -->
  <?php } else 
  redirect(base_url()."users/login"); 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>GisNepal - Admin Panel</title>

    <!-- Bootstrap CSS -->    
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>css/niceadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>css/niceadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url()?>css/niceadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>css/niceadmin/line-icons.css" rel="stylesheet" />

    <link href="<?=base_url()?>css/niceadmin/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?=base_url()?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?=base_url()?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>css/niceadmin/owl.carousel.css" type="text/css">
  <link href="<?=base_url()?>css/niceadmin/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="<?=base_url()?>css/niceadmin/fullcalendar.css">
  <link href="<?=base_url()?>css/niceadmin/widgets.css" rel="stylesheet">
    <link href="<?=base_url()?>css/niceadmin/style.css" rel="stylesheet">
    <link href="<?=base_url()?>css/niceadmin/style-responsive.css" rel="stylesheet" />
  <link href="<?=base_url()?>css/niceadmin/xcharts.min.css" rel=" stylesheet"> 
  <link href="<?=base_url()?>css/niceadmin/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?=base_url()?>admins" class="logo">Admin <span class="lite">Panel</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                           
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i><span class="icon_menu"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                         
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                  
                    <!-- task notificatoin end -->
                   <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon_lightbulb"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- getting personal user inforamtion for session-->
                    <?php $detail = $this->session->userdata('personal');?>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?=base_url()?>img/admin/<?=$detail['dp']?>">
                            </span>
                            <span class="username"><?=$detail['fname']." ".$detail['lname'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?=base_url()?>admins/profile"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admins/changepassword"><i class="icon_key_alt"></i> Change Password</a>
                            </li>
                             <li>
                                <a href="https://www.arcgis.com/home/signin.html"><i class="icon_key_alt"></i> Go to ArcGIS Online</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>users/logout""><i class="icon_key_alt"></i> Logout</a>
                            </li>

                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->


      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?=base_url()?>admins">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>

      
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_genius"></i>
                          <span>Maps Gallery</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?=base_url()?>admins/addtogallery">Add to Gallery</a></li>
                          <li><a class="" href="<?=base_url()?>admins/managegallery">Manage Gallery</a></li>
                      </ul>
                  </li>
                  <li>    
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Articles</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?=base_url()?>admins/add_article">Add New Article</a></li>
                          <li><a class="" href="<?=base_url()?>admins/manage_article">Manage Articles</a></li>
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Category</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?=base_url()?>admins/newcategory">Add New Category</a></li>
                          <li><a class="" href="<?=base_url()?>admins/managecategory">Manage Categories</a></li>
                      </ul>
                  </li>
                  <li><!--
                      <a class="" href="widgets.html">
                          <i class="icon_document_alt"></i>
                          <span>Contact</span>
                      </a> -->
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
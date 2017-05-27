
   <!DOCTYPE html>
<html lang="en">
  <head>
  <title>GISNepal | Home</title>
  <meta charset="utf-8">
  <link rel="icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://dzyngiri.com/favicon.png" type="image/x-icon" />
    <meta name="description" content="GIS Nepal is a free GIS system for public">
    <meta name="keywords" content="nepal, gis, bootstrap, esri, arcgis">
    <meta name="author" content="SXC project">  
  <link rel="stylesheet" href="http://localhost/gisNepal/css/bootstrap.css" type="text/css" media="screen">
  <link rel="stylesheet" href="http://localhost/gisNepal/css/responsive.css" type="text/css" media="screen">
  <link rel="stylesheet" href="http://localhost/gisNepal/css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="http://localhost/gisNepal/css/touchTouch.css" type="text/css" media="screen">
  <link rel="stylesheet" href="http://localhost/gisNepal/css/kwicks-slider.css" type="text/css" media="screen">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>

  <body>
<!-- header start -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="http://localhost/gisNepal/homepage"><!--<img alt="" src="img/loo.png">--><h3  style="vertical-align: text-top; color:black">GIS NEPAL</h3> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="http://localhost/gisNepal/">Home</a></li>
                <li><a href="work.html">About Us</a></li>\
                <li><a href="contact.html">Contact</a></li>
                <li><a href="http://localhost/gisNepal/products">Gallery</a></li>
                <li><a href="http://localhost/gisNepal/articles">Blog</a></li>
                <li class="sub-menu"><a href="process.html">Maps</a>
                      <ul>
                    <li><a href="http://localhost/craftnepal/">Link to Map1</a></li>
                    <li><a href="#">Link to Map2</a></li>
                    <li><a href="#">Link to Map3</a></li>
                  </ul>
                    </li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header><!-- footer -->

<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span12">
         <div class="inner-1">         
          <ul class="list-blog">
          <!-- Building divs for each item blog from db -->
          
       
              <li>  
              <h3><?=$row['topic']?></h3>     
              <time datetime="<?=$row['date_added']?>" class="date-1"><i class="icon-calendar icon-white"></i> &nbsp;<?=$row['date_added']?></time>
              <div class="name-author"><i class="icon-user icon-white"></i> &nbsp;<a href="#"><?=$row['writername']?></a></div>
              <a href="#" class="comments"><i class="icon-eye-open icon-white"></i> &nbsp;<?=$row['views']?></a> 
              <div class="clear"></div>            
                <img style="width:100%" alt="" src="<?php echo base_url()?>uploads/article/<?=$row['coverimage']?>">                               
                <p><?=$row['content']?></p>
              </li>  
          </ul>
          </div>  
        </article>
      </div>
     </div>
  </div>
 </div>

<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">&copy; 2013 | <a href="http://www.dzyngiri.com">Dzyngiri : Online Design Magazine</a> | <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a> | Demo Illustrations by <a href="http://justinmezzell.com" target="_blank">Justin Mezzell</a></div>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
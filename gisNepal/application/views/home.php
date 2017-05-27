
<div class="bg-content">
      <div class="container">
    <div class="row">

          <div class="span12"> 
        <!-- slider -->
        <div class="flexslider">
              <h3></h3>
              <ul class="slides">
            <li> <img src="img/carousel/slide-1.png" alt="" ></li>
            <li> <img src="img/carousel/slide-2.png" alt="" > </li>
            <li> <img src="img/carousel/slide-3.png" alt="" > </li>
            <li> <img src="img/carousel/slide-4.png" alt="" > </li>
            <li> <img src="img/carousel/slide-5.png" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
       <center></center> <div class="block-slogan">
              <h2>Welcome to GIS Nepal!</h2>
            <h5>We are dedicated to protecting our environment. Are you?</h5>

              <div>
            <p style="text-align:center; padding-top:20px;"><a href="<?=base_url()?>products" class="btn btn-1">Visit Our Gallery</a></p>
          </div></div>
            </div>
      </div>
        </div>
  
      
      <!-- content -->
      
      <div id="content" class="content-extra"><div class="ic"></div>
    <div class="row-1">
        <div class="container">
    		<div class="row">
        <article class="span12">
        <h4>Latest in our Gallery</h4>
         </article>
        <div class="clear"></div>
         <ul class="portfolio clearfix">    
        
                <?php
    foreach ($gallery as $row) {?>
       
         <li class="span3" >
                  <div class="thumbnail thumbnail-1" style="height:400px;background:#1A1412">
                <h5 style="height:10%; background: #F51; color:#000;" ><?=$row['iname']?></h5>
               <div style="height:50%; color:#CCC"><a href="<?=base_url();?>uploads/<?=$row['imagename']?>" class="magnifier" ><img style = "height :200px; width:300px" alt="" src="<?php echo base_url()?>uploads/<?=$row['thumbnail']?>" ></a></div>
                <section style="overflow:auto; "> 
                      <div class="meta">
                            <time style="color:orange;" datetime="<?=$row['date_added']?>" class="date-1"><i class="icon-calendar"></i> <?=$row['date_added']?></time>
                        </div> 
                      <p style="color:#EEE"><?=$row['description'];?></p>
              </section>
              </div>
                </li>
       <?php } ?>    

         </ul> 
      </div>
     	</div>
    </div>
    <div class="row-2" style="background: #1A1412;">
        <div class="container">
        	<h3>THE GREATEST THREAT TO OUR PLANET IS THE BELIEF THAT SOMEONE ELSE WILL SAVE IT!!</h3>
            <h3>Be an agent of change!!</h3>
            <p>Grow with GIS Nepal</p>
      </div>
        </div>
    <div class="row-1">
        <div class="container">
        <div class="row">
        <article class="span12">
        <h4>Most Popular Article</h4>
         </article>
              <ul class="thumbnails thumbnails-1">
               <?php foreach ($articles as $row) {?>

            <li class="span4">
                  <div class="thumbnail thumbnail-1">
                <a href="<?=base_url()?>articles/displayarticle/<?=$row['id']?>"><h3><?=$row['topic']?></h3></a>
                <img  src="<?php echo base_url()?>uploads/article/<?=$row['coverimage']?>" alt="">
                <section> 
                		<h3><?=$row['writername']?></h3>
                	    <div class="meta">
                            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i><?=$row['date_added']?></time>
                           <a href="#" class="comments"><i class="icon-eye-open icon-black"></i> &nbsp;<?=$row['views']?></a> 
                        </div> 
                        <div class="clear"></div>
                      <p><?=$row['abstract']?></p>
              </div>
                </li>
                <?php } ?>
           
          </ul>
            </div>
      </div>
        </div>
    
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3 id="aboutus">Shortly about us</h3>
              <div class="wrapper">
            <figure class="img-indent"><img style="height: 192px; width:250px" src="<?=base_url()?>img/gisnepal.png " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">GIS Nepal is the first Environmental Information System of Nepal dedicated for environmental preservation and conservation</div>
                  The objective of GIS Nepal is to equip public with an easy GIS interface at their disposal to get easy access to environmental information.
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Some quick links</h3>
                <div class="wrapper">
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list list-pad">
                          <li><a href="#">Campaigns</a></li>
                          <li><a href="#">Portraits</a></li>
                          <li><a href="#">Fashion</a></li>
                          <li><a href="#">Fine Art</a></li>
                        </ul>
                    <ul class="list">
                          <li><a href="#">Advertising</a></li>
                          <li><a href="#">Lifestyle</a></li>
                          <li><a href="#">Love story</a></li>
                          <li><a href="#">Landscapes</a></li>
                    </ul>
                </div>
            </article>
      </div>
        </div>
 </div>
 </div>
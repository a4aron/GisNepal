
<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">   
            <ul class="portfolio clearfix">  

                <?php
    foreach ($result as $row) {?>
       <li class="box"><a href="<?=base_url();?>uploads/<?=$row['imagename']?>" class="magnifier" ><img style = "height :200px; width:200px;" alt="" src="<?php echo base_url()?>uploads/<?=$row['thumbnail']?>" ></a></li> 

       <?php } ?>

                          
            </ul> 

          <ul class="list-blog">
            <li>  
            <h3>Morbi ullamcorper leo eget varius elementum</h3>     
            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar icon-white"></i> 9.11.2012</time>
            <div class="name-author"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
            <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a> 
            <div class="clear"></div>            
              <img alt="" src="img/blog-1.jpg">                               
              <p>Morbi ullamcorper, leo eget varius elementum, orci leo feugiat lectus, vitae lobortis mauris velit tempor erat. Etiam eget orci at massa pretium fringilla ac non tortor. Fusce sed velit risus, vitae vehicula quam. Cras at turpis urna, eget volutpat neque. Nullam porttitor, est interdum placerat pharetra, erat sapien aliquet urna, at commodo risus tellus eu nunc.</p>
              <a href="#" class="btn btn-1">Read More</a>          
            </li>  
                        
            <li>  
            <h3>Duis autem vel eum iriure dolor</h3>     
            <time datetime="2012-11-08" class="date-1">8.11.2012</time>
            <div class="name-author">by <a href="#">Admin</a></div>
            <a href="#" class="comments">9 comments</a> 
            <div class="clear"></div>            
              <img alt="" src="img/blog-2.jpg">                               
              <p>Morbi ullamcorper, leo eget varius elementum, orci leo feugiat lectus, vitae lobortis mauris velit tempor erat. Etiam eget orci at massa pretium fringilla ac non tortor. Fusce sed velit risus, vitae vehicula quam. Cras at turpis urna, eget volutpat neque. Nullam porttitor, est interdum placerat pharetra, erat sapien aliquet urna, at commodo risus tellus eu nunc.</p>
              <a href="#" class="btn btn-1">Read More</a>          
            </li> 
            
            <li>  
            <h3>Nullam porttitor est interdum placerat pharetra</h3>     
            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar icon-white"></i> 9.11.2012</time>
            <div class="name-author"><i class="icon-user icon-white"></i> <a href="#">Admin</a></div>
            <a href="#" class="comments"><i class="icon-comment icon-white"></i> 11 comments</a> 
            <div class="clear"></div>            
              <img alt="" src="img/blog-3.jpg">                               
              <p>Morbi ullamcorper, leo eget varius elementum, orci leo feugiat lectus, vitae lobortis mauris velit tempor erat. Etiam eget orci at massa pretium fringilla ac non tortor. Fusce sed velit risus, vitae vehicula quam. Cras at turpis urna, eget volutpat neque. Nullam porttitor, est interdum placerat pharetra, erat sapien aliquet urna, at commodo risus tellus eu nunc.</p>
              <a href="#" class="btn btn-1">Read More</a>          
            </li> 
                          
          </ul>
          </div>  
        </article>
        <article class="span4">
          <h3 class="extra">Search</h3>
          <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
              <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>
          </form>
          <h3>Categories</h3>
          <ul class="list extra extra1">
            <li><a href="#">Vonsequat</a></li>
            <li><a href="#">Utdminim veniam</a></li>
            <li><a href="#">Qullamcorper</a></li>
            <li><a href="#">Suscipitlobortis</a></li>
            <li><a href="#">Comnsequat</a></li>
            <li><a href="#">Duendrerit</a></li>
            <li><a href="#">Facilisis</a></li>
            <li><a href="#">Luptatum</a></li>
            <li><a href="#">Qui blandit</a></li>                     
      </ul>
          <h3>Archive</h3>
         <div class="wrapper">
          <ul class="list extra2 list-pad ">
            <li><a href="#">May 2012</a></li>
            <li><a href="#">April 2012</a></li>
            <li><a href="#">March 2012</a></li>
            <li><a href="#">February 2012</a></li>
            <li><a href="#">January 2012</a></li>
            <li><a href="#">December 2011</a></li>
          </ul>
            <ul class="list extra2">
            <li><a href="#">November 2012</a></li>
            <li><a href="#">October 2012</a></li>
            <li><a href="#">September 2012</a></li>
            <li><a href="#">August 2012</a></li>
            <li><a href="#">July 2012</a></li>
            <li><a href="#">June 2012</a></li>
          </ul>
          
          </div>
        </article>
         <article class="span4">
          <h3 class="extra">Search</h3>
          <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
              <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">Search</a> </div>
          </form>
          <h3>Categories</h3>
          <ul class="list extra extra1">
            <li><a href="#">Vonsequat</a></li>
            <li><a href="#">Utdminim veniam</a></li>
            <li><a href="#">Qullamcorper</a></li>
            <li><a href="#">Suscipitlobortis</a></li>
            <li><a href="#">Comnsequat</a></li>
            <li><a href="#">Duendrerit</a></li>
            <li><a href="#">Facilisis</a></li>
            <li><a href="#">Luptatum</a></li>
            <li><a href="#">Qui blandit</a></li>                     
      </ul>
          <h3>Archive</h3>
         <div class="wrapper">
          <ul class="list extra2 list-pad ">
            <li><a href="#">May 2012</a></li>
            <li><a href="#">April 2012</a></li>
            <li><a href="#">March 2012</a></li>
            <li><a href="#">February 2012</a></li>
            <li><a href="#">January 2012</a></li>
            <li><a href="#">December 2011</a></li>
          </ul>
            <ul class="list extra2">
            <li><a href="#">November 2012</a></li>
            <li><a href="#">October 2012</a></li>
            <li><a href="#">September 2012</a></li>
            <li><a href="#">August 2012</a></li>
            <li><a href="#">July 2012</a></li>
            <li><a href="#">June 2012</a></li>
          </ul>
          
          </div>
        </article>
      </div>
     </div>
  </div>
 </div>


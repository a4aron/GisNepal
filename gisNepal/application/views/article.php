
<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">         
          <ul class="list-blog">
          <!-- Building divs for each item blog from db -->
            <?php foreach ($result as $row) {?>
       
              <li>  
              <h3><?=$row['topic']?></h3>     
              <time datetime="<?=$row['date_added']?>" class="date-1"><i class="icon-calendar icon-white"></i> &nbsp;<?=$row['date_added']?></time>
              <div class="name-author"><i class="icon-user icon-white"></i> &nbsp;<a href="#"><?=$row['writername']?></a></div>
              <a href="#" class="comments"><i class="icon-eye-open icon-white"></i> &nbsp;<?=$row['views']?></a> 
              <div class="clear"></div>            
                <img style="width:100%" alt="" src="<?php echo base_url()?>uploads/article/<?=$row['coverimage']?>">                               
                <p><b>Abstract: </b><?=$row['abstract']?></p>
                <a href="<?=base_url()?>articles/displayarticle/<?=$row['id']?>" class="btn btn-1">Read More</a>          
              </li>  
         <?php } ?>                   
                        
           
                          
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
          <form  action="<?=base_url()?>articles" method = "post" class="form">    
                    <?php

                         $baseurl = base_url();
                        foreach ($cat as $row) {
                                    echo "<li><button style='color : #AAA' type='submit' class='btn btn-primary btn-link' name ='category' value='$row[category]'>$row[category]</button> </li>";
                    }?>

                    <label for="orderby">Order By: &nbsp;&nbsp;&nbsp;</label>
                    <select class="select" name="orderby" id="orderby" style="width:auto;" >
                       <option value="views">Views</option>
                       <option value="date_added">Date Added</option>
                    </select>
                    <label for="order">Order By: &nbsp;&nbsp;&nbsp;</label>
                    <select class="select" name="order" id="order" style="width:auto;">
                          <option value="asc">Ascending</option>
                          <option value="desc">Descending</option>
                    </select>
                   <!-- OR <input type="hidden" name="order" value="desc"/>
                    <input type="hidden" name="orderby" value="date_added"/> -->

             </form>
          <!-- <h3>Archive</h3>
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
          
          </div> -->
        </article>
      </div>
     </div>
  </div>
 </div>

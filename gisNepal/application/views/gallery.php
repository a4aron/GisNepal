
<div class="bg-content">       
  <!-- Content -->      
      <div id="content"><div class="ic"></div>
    <div class="container">
       <div class="row">
        <article class="span10">
        <h4><?=$categoryname?></h4>
        <hr/>
       
        <div class="clear"></div>
<!-- SEARCH BAR AT THE TOP
        <form  action="<?=base_url()?>products" method = "post" class="form-inline">
        <section class="col-sm-12">
        <label for="category">Categories: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="category" id="category" style="width:auto;">
                    <?php
                        foreach ($cat as $row) {
                                    echo "<option>".$row['category']."</option>";
                    }?>
        </select>
        <label for="orderby">Order By: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="orderby" id="orderby" style="width:auto;">
              <option value="price">Price</option>
              <option value="date_added">Date Added</option>
        </select>
        <label for="order">Order By: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="order" id="order" style="width:auto;">
              <option value="asc">Ascending</option>
              <option value="desc">Descending</option>
        </select>
        <button type="submit" class="btn btn-info">Search </button>

      </section>
      </form> SEARCH BAR END--> 
         <ul class="portfolio clearfix">  

                <?php
    foreach ($result as $row) {?>
       
         <li class="span3" >
                  <div class="thumbnail thumbnail-1" style="height:400px;">
                <h5 style="height:10%; background: #F51; color:#000;" ><?=$row['iname']?></h5>
               <div style="height:50%"><a href="<?=base_url();?>uploads/<?=$row['imagename']?>" class="magnifier" ><img style = "height :200px; width:300px" alt="" src="<?php echo base_url()?>uploads/<?=$row['thumbnail']?>" ></a></div>
                <section style="overflow:auto"> 
                      <div class="meta">
                            <time style="color:orange;" datetime="<?=$row['date_added']?>" class="date-1"><i class="icon-calendar"></i> <?=$row['date_added']?></time>
                        </div> 
                      <p style="color:#FFF"><i><?=$row['description'];?></i></p>
              </section>
              </div>
                </li>
       <?php } ?>                   
            </ul> 
              </article>

                <article class="span2">
          <br/>
          <h3>Categories</h3>
           <form  action="<?=base_url()?>products" method = "post" class="form-inline">    
                    <?php

                         $baseurl = base_url();
                        foreach ($cat as $row) {
                                    echo "<li><button style='color : #AAA' type='submit' class='btn btn-primary btn-link' name ='category' value='$row[category]'>$row[category]</button> </li>";
                    }?>

                    <input type="hidden" name="orderby" id="orderby" value="date_added">
                  
                    <label for="order"><h3>Order By: &nbsp;&nbsp;&nbsp;</h3></label>
                    <select class="select" name="order" id="order" style="width:auto;">
                          <option value="asc">Ascending</option>
                          <option value="desc">Descending</option>
                    </select>
                   <!-- OR <input type="hidden" name="order" value="desc"/>
                    <input type="hidden" name="orderby" value="date_added"/> -->
             </form>
        </article>
          <!--  <?=$pages;?>   pagination bigro-->
      </div>
        </div>
  </div>
    </div>

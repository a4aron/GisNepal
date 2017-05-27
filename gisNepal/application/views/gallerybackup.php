
<div class="bg-content">       
  <!-- Content -->      
      <div id="content"><div class="ic"></div>
    <div class="container">
       <div class="row">
        <article class="span12">
        <h4>Portfolio</h4>

         </article>
        <div class="clear"></div>

        <form  action="<?=base_url()?>products" method = "post" class="form-inline">
        <section class="col-sm-12">
        <label for="category">Categories: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="category" id="category">
                    <?php
                        foreach ($cat as $row) {
                                    echo "<option>".$row['category']."</option>";
                      
            
            }?>
        </select>
        <label for="orderby">Order By: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="orderby" id="orderby">
              <option value="price">Price</option>
              <option value="date_added">Date Added</option>
        </select>
        <label for="order">Order By: &nbsp;&nbsp;&nbsp;</label>
        <select class="select" name="order" id="order">
              <option value="asc">Ascending</option>
              <option value="desc">Descending</option>
        </select>
        <button type="submit" class="btn btn-info">Search </button>

      </section>
      </form>
         <ul class="portfolio clearfix">  

                <?php
    foreach ($result as $row) {?>
       <li class="box"><a href="<?=base_url();?>uploads/<?=$row['imagename']?>" class="magnifier" ><img style = "height :200px; width:200px;" alt="" src="<?php echo base_url()?>uploads/<?=$row['thumbnail']?>" ></a></li> 

       <?php } ?>

                          
            </ul> 
          <!--  <?=$pages;?>   pagination bigro-->
      </div>
        </div>
  </div>
    </div>


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header" style="color:#AAA"><i class="fa fa-files-o"></i> Manage Gallery</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Map Gallery</li>
						<li><i class="fa fa-files-o"></i>Manage Gallery</li>
					</ol>
				</div>
			</div>

   <div class="row">
       <div class="col-lg-12">
            <section class="panel" >
               <header class="panel-heading">
               <!-- SEARCH BAR -->
               <form  action="<?=base_url()?>admins/managegallery" method = "post" class="form-inline">
                  <section class="col-sm-12">
                  <label for="category">Categories: &nbsp;&nbsp;&nbsp;</label>
                  <select class="select" name="category" id="category" style="width:auto;">
                              <?php
                                  foreach ($cat as $row) {
                                              echo "<option>".$row['category']."</option>";
                              }?>
                  </select>
                  
                  <input type="hidden" name="orderby" id="orderby" value="date_added"/>
                  <label for="order"><span style="margin-left:100px">Order By: &nbsp;&nbsp;&nbsp;</span></label>
                  <select class="select" name="order" id="order" style="width:auto;">
                        <option value="asc">Ascending</option>
                        <option value="desc" selected="true">Descending</option>
                  </select>
                  <button style="margin-left:100px" type="submit" class="btn btn-info">Search </button>
                  </form>  <!-- END OF SEARCH BAR -->
              </header>
              <div class="panel-body">
             <ul class="portfolio clearfix">  
                <?php
    foreach ($result as $row) {?>
       
         <li class="col-md-6 col-md-6 col-lg-4" style="margin: 20px 0px" >
              <div class="thumbnail thumbnail-1" style="height:400px;">
                  <h4  style="height:10%; overflow: hidden; background: #8AF; width:100%"><?=$row['iname']?></h4>
              <div style="height:50%">
                 <a href="<?=base_url();?>uploads/<?=$row['imagename']?>" class="magnifier" >
                   <img style = "height :200px; margin-left:auto; margin-right:auto;" alt="" src="<?php echo base_url()?>uploads/<?=$row['thumbnail']?>" >
               </a>
               </div>
                <section style=""> 
                      <div class="meta">
                            <p><time datetime="<?=$row['date_added']?>" class="date-1"><i class="icon-calendar"></i> <?=$row['date_added']?></time></p>
                        </div> 
                      <p style="height:10%; overflow:auto;"><?=$row['description'];?></p>
                </section>
                     <div style=" background: #CCC; height:10%">
                      <a href="<?=base_url()?>admins/editgallery/<?=$row['id']?>" style="background: #8FA; width: 50%; float:left" class="btn btn-warning" ><span class="icon_plus_alt2"></span>&nbsp; Edit</a>
                      <a href="<?=base_url()?>admins/deletegallery/<?=$row['id']?>" style=" width: 50%; float:right"  class="btn btn-warning"  ><span class="icon_close_alt2"></span> &nbsp;Delete</a>
                     </a>
                     </div>
              </div>
                </li>
       <?php } ?>                   
            </ul>
                    </div>
                      </section> <!--panel end -->
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

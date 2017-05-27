
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3  style="color:#AAA" class="page-header"><i class="fa fa-files-o"></i> Edit Gallery</h3>
        

                  <?php
						if (isset($success) && $success==1){
   								 echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";   								 ;
   								 header("refresh:2; url=".base_url()."admins/managegallery");
   								 //redirect(base_url()."admins/addproduct");
}?>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Maps Gallery</li>
						<li><i class="fa fa-files-o"></i>Edit Gallery</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                Upload Image
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <?php echo form_open_multipart('admins/editgallery/'.$product['id']); ?>
								<div class="form-group">
								   	<p>
								    <label for="imagename">Image Name</label>
								    <input class="form-control" type="text" name="imagename" id="imagename" value ="<?=$product['iname'];?>" placeholder=" Image Name "/><br/>
								    </p>
								    <p>
								     <label for="category">Categories &nbsp;&nbsp;&nbsp;</label>
								    <select class="select" name="category" id="category">
										<?php
												foreach ($cat as $row) {
													if($row['category']!="All"){
                										echo "<option>".$row['category']."</option>";
													}
										}?>
									</select><br/>
									</p>
									<p>
								      <label for="description">Description</label>
								     <textarea id="description" class="form-control"  class="form-control" placeholder=" Description " rows="5" cols="100" style="vertical-align:top; width:100%, overflow: auto;"
								             		                         name="description"><?=$product['description']?></textarea><br/>
								    	
									</p>
									<button type="submit" class="btn btn-info">Update Image </button>
								<?php echo form_close(); ?>
									
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->











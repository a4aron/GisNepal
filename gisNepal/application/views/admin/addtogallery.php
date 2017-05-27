
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"  style="color:#AAA"><i class="fa fa-files-o"></i> Add to gallery</h3>
                    <?php
                        if (isset($success) && $success==1){
                                 echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";                                    ;
                                // header("refresh:2; url=".base_url()."admins/addproduct");
                                 //redirect(base_url()."admins/addproduct");
}?> 
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Maps Gallery</li>
						<li><i class="fa fa-files-o"></i>Add to Gallery</li>
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
                                 <?php echo form_open_multipart('admins/do_upload'); ?>
                                    <label for="imagename">Title</label>
                                    <input class="form-control" type="text" name="imagename" id="imagename" placeholder=" Enter Title " required="true" /><br/>
                                    <label>File Name</label>
                                        <?php
                                                $data_form=array(
                                                'name'=>'userfile'
                                            ); 
                                            echo form_upload($data_form)."<br/>";?>
                                     <label for="category">Categories &nbsp;&nbsp;&nbsp;</label>
                                    <select class="select" name="category" id="category">
                                        <?php
                                                foreach ($cat as $row) {
                                                    if($row['category']!="All")
                                                        echo "<option>".$row['category']."</option>";
                                        }?>
                                    </select><br/>
                                   <label for="description">Description</label>
                                     <textarea class="form-control"  class="form-control" placeholder=" Description " rows="10" cols="100" style="vertical-align:top; width:100%, overflow: auto;"
                                                                             name="description"></textarea><br/>
                                        
                                         <?php   echo form_submit('upload','Upload',"class = 'btn btn-info'");?>
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

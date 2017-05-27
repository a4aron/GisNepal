<script type="text/javascript" src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header" style="color:#AAA"><i class="fa fa-files-o"></i>Edit Article</h3>
                  <?php
						if (isset($success) && $success==1){
   								 echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";   								 ;
   								 header("refresh:2; url=".base_url()."admins/manage_article");
   								 //redirect(base_url()."admins/addproduct");
}?>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Articles</li>
						<li><i class="fa fa-files-o"></i>Manage Articles</li>
						<li><i class="fa fa-files-o"></i>Edit Article</li>

					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit given values
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <?php echo form_open_multipart('admins/edit_article/'.$article['id']); ?>
								<div class="form-group">
								   	<p>
								    <label for="imagename">Topic</label>
								    <input class="form-control" type="text" name="topic" id="topic" value ="<?=$article['topic'];?>" placeholder=" Topic Name "/><br/>
								    </p>
								    <p>
								     <label for="category">Categories &nbsp;&nbsp;&nbsp;</label>
								    <select class="select" name="category" id="category">
										<?php
												foreach ($cat as $row) {
													if($row['category']!="All"){
														if($row[category]!=$category_name)
                											echo "<option>".$row['category']."</option>";
                										else
                											echo "<option select>".$row['category']."</option>";
													}
										}?>
									</select><br/>
									</p> 
									<p>
									 <label for="writername">Author</label>
                                     <input class="form-control" type="text" name="writername" id="writername" placeholder=" Enter Write Name "value ="<?=$article['writername'];?>" required="true" /><br/> </p>
                                     <p>      
                                     <label for="abstract">Abstract</label>
                                     <textarea class="form-control"  name="abstract" rows="10" cols="100" id="abstract"><?=$article['abstract']?></textarea>
                                     </p>
									<p>
								      <label for="description">Details</label>
								     <textarea id="description" class="form-control"  class="form-control" placeholder=" Description " rows="20" cols="10" style="vertical-align:top; height: 500px; width:100%, overflow: auto;"
								             		                         name="description"><?=$article['content']?></textarea><br/>
                                        <script type="text/javascript">CKEDITOR.replace('description'); </script>
								    	
									</p>
									<button type="submit" class="btn btn-info">Update Article </button>
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











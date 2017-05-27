<script type="text/javascript" src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header" style="color:#AAA"><i class="fa fa-files-o"></i> Add New Article</h3>

                    <?php
                        if (isset($success) && $success==1){
                                 echo "<div style='color:white;background: greenyellow;'><span>Success!!</span></div>";                                    ;
                                // header("refresh:2; url=".base_url()."admins/add_article");
                                 //redirect(base_url()."admins/addproduct");
}?> 
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Articles</li>
						<li><i class="fa fa-files-o"></i>Add New Article</li>
					</ol>
				</div>
			</div>
                        
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Fill following detail
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <?php echo form_open_multipart('admins/do_upload_article'); ?>
                                    <label for="topic">Topic</label>
                                    <input class="form-control" type="text" name="topic" id="topic" placeholder=" Enter Title " required="true" /><br/>
                                    <label>Cover Image</label>
                                        <?php
                                                $data_form=array(
                                                'name'=>'userfile'
                                            ); 
                                            echo form_upload($data_form)."<br/>";?>
                                    <label for="writername">Author</label>
                                     <input class="form-control" type="text" name="writername" id="writername" placeholder=" Enter Write Name " required="true" /><br/>       
                                     <label for="abstract">Abstract</label>
                                     <textarea name="abstract" class="form-control" placeholder="Your abstract here" rows="10" cols="100" id="abstract"></textarea><br/>
                                     <label for="category">Categories &nbsp;&nbsp;&nbsp;</label>
                                    <select class="select" name="category" id="category">
                                        <?php
                                                foreach ($cat as $row) {
                                                    if($row['category']!="All")
                                                        echo "<option>".$row['category']."</option>";
                                        }?>
                                    </select><br/>
                                   <label for="description">Content</label>
                                     <textarea   class="form-control" placeholder=" Description " rows="10" cols="100" style="vertical-align:top; width:100%, overflow: auto;"
                                                                             name="description" id="description"></textarea><br/>
                                        <script type="text/javascript">CKEDITOR.replace('description'); </script>
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

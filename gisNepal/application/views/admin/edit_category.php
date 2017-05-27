
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header" style="color:#AAA"><i class="fa fa-files-o"></i>Edit Category</h3>
                 
						<?php
            if (isset($success) && $success==1){
                   echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";
                   header("refresh:2; url=".base_url()."admins/managecategory");
            }?>   
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Categories</li>
						<li><i class="fa fa-files-o"></i>Manage Categories</li>
            <li><i class="fa fa-files-o"></i>Edit Category</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Manage Category
                          </header>
                          <div class="panel-body">
                          <form action="<?=base_url()."admins/editcategory/".$category['id']?>" method="post">
                            <div class="form-group">
                            <label for="id">  </label>
                              <input class="form-control" type="hidden" name="id" id="id" value="<?=$category['id']?>" placeholder=" ID "><br/>
                              
                              <label for="category"> Category: </label>
                              <input class="form-control" type="text" name="category" id="category" value="<?=$category['category']?>" placeholder=" Category "><br/>
                              <button type="submit" class="btn btn-info">Update Category</button>
                            </div>
                         </form>
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











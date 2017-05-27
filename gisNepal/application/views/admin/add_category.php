
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header" style="color:#AAA"><i class="fa fa-files-o"></i>Add Category</h3>
                 
						<?php
						if (isset($success) && $success==1){
   								 echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";
								}?>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Categories</li>
						<li><i class="fa fa-files-o"></i>Add Category</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Add New Category
                          </header>
                          <div class="panel-body">
                              <form action="<?=base_url()."admins/newcategory"?>" method="post">
									<div class="form-group">
								
								<label for="category">Category: </label><br/>
								<input class="form-control" type="text" name="category" id="category" ><br/>
								
																<button type="submit" class="btn btn-info">Insert Category </button>
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











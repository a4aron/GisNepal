
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"  style="color:#AAA"><i class="fa fa-files-o"></i>Manage Category</h3>
                 
						<?php
						if (isset($success) && $success==1){
   								 echo "<div style='color:white;background: greenyellow;'><span>Updated</span></div>";
								}?>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Categories</li>
						<li><i class="fa fa-files-o"></i>Manage Category</li>
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
                              <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="arrow_triangle-down"></i> ID</th>
                                 <th><i class="icon_calendar"></i> Category Name</th>
                                 <th> <i class="icon_box-checked"></i>Edit </th>
                                 <th><i class="icon_close_alt2"></i>Delete</th>
                                </tr>
                                <?php
                                  foreach ($categories as $row) {
                                    if($row['category']!='All'){
                                    echo "<tr><td>".$row['id']."</td><td>".strip_tags($row['category'])."</td>";
                                            echo "<td><a class='btn btn-success' href ='".base_url()."admins/editcategory/".$row['id']."'><i class='icon_check_alt2'></i></a></td>";
                                            echo "<td><a class='btn btn-danger' href ='".base_url()."admins/deletecategory/".$row['id']."'><i class='icon_close_alt2'></i></a></td></tr>";
                                          }
                                   }?>

                                  
                                  </td>
                              </tr>
                                         
                           </tbody>
                        </table>

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












      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"  style="color:#AAA"><i class="fa fa-files-o"></i> Change Password</h3>
                    <?php
                        if (isset($success) && $success==1){
                                 echo "<div style='color:white;background: greenyellow;'><span>Password Changed</span></div>";                                    ;
                                // header("refresh:2; url=".base_url()."admins/addproduct");
                                 //redirect(base_url()."admins/addproduct");
}
                       else if (isset($error)){
                                 echo "<div style='color:white;background: red;'><span>$error</span></div>";                                    ;
                                // header("refresh:2; url=".base_url()."admins/addproduct");
                                 //redirect(base_url()."admins/addproduct");
}?> 


					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>My Profile</li>
						<li><i class="fa fa-files-o"></i>Change Password</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                                Change Password
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <form action="<?=base_url()."admins/changepassword"?>" method="post">
                              <label for="oldpassword"> Old Password: </label>
                              <input required="true" minlength="5" class="form-control" type="password" name="oldpassword" id="oldpassword" placeholder=" Old Password "><br/>
                              <label for="password"> New Password: </label>

                              <input required="true" minlength="5" class="form-control" type="password" name="password" id="password" placeholder=" Enter New Password "><br/>
                              <label for="repassword"> Retype Password: </label>

                                <input required="true" minlength="5" class="form-control" type="password" name="repassword" id="repassword" placeholder=" Retype Password "><br/>
                              <button type="submit" class="btn btn-info">Change Password</button>
                            </div>
                         </form>
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

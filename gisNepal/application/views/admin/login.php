<?php if($this->session->userdata('userID')){?>
    <?=redirect(base_url()."admins");
     } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page </title>

    <!-- Bootstrap CSS -->    
    <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>css/niceadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url()?>css/niceadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>css/niceadmin/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?=base_url()?>css/niceadmin/style.css" rel="stylesheet">
    <link href="<?=base_url()?>css/niceadmin/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


   <!-- Change background image by changing img/bg-1.jpg or goto css/niceadmin/style => login-img-body  -->
  <body class="login-img2-body" style="  background: url('<?=base_url()?>img/bg-1.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

    <div class="container">

      <form class="login-form" action="<?=base_url()?>users/login" method="post">   

        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="username"  class="form-control" placeholder="Username" required="true" minlength="4" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password"  class="form-control" placeholder="Password" required="true" minlength="5">
            </div>
            <!--
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label> -->
                <?php if($error==1) {echo "<p style='color:red;'>Username or Password Incorrect</p>";} ?>
            <hr/>
            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>

    </div>


  </body>
</html>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Login</title>
	<meta name="description" content="">  
	<meta name="author" content="">	
	<?php include 'header.php'; ?>
	

</head>

  <body>  
  
   <?php include 'navigation.php'; ?>
   

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Login to account</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
            <div class="page-login-form box">
              <h3>
                Login
              </h3>
              <form role="form" class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>                  
                <div class="checkbox">
                  <input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
                  <label for="remember">Remember me</label>
                </div>
                <button class="btn btn-common log-btn">Submit</button>
              </form>
              <ul class="form-links">
                <li class="pull-left"><a href="signup.php">Don't have an account?</a></li>
                <li class="pull-right"><a href="forgot-password.html">Lost your password?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
    
  <?php include'footer.php';?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Forgot Password</title>
	<meta name="description" content="">  
	<meta name="author" content="">	
	<?php include 'header.php'; ?>
	

</head>

  <body>  
  
   <?php include 'navigation.php'; ?>
   


    <!-- Content section Start --> 
<section id="content">
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
<h3>
Forgot Password
</h3>
<form role="form" class="login-form">
<div class="form-group is-empty">
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
</div>
<span class="material-input"></span></div>
<button class="btn btn-common log-btn">Send me my Password</button>
</form>
<ul class="form-links">
<li class="pull-left"><a href="signup.php">Don't have an account?</a></li>
<li class="pull-right"><a href="login.php">Back to Login</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
    <!-- Content section End --> 
    
   <?php include'footer.php';?>
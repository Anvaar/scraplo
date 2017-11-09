<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Account Home</title>
	<meta name="description" content="">  
	<meta name="author" content="">	
	<?php include 'header.php'; ?>
	

</head>

  <body>  
  
  <?php include 'navigation.php'; ?> 
  
   

    <!-- Start Content -->
<div id="content">
<div class="container">
<div class="row">

		<div class="col-sm-3 page-sideabr">
		  <?php include 'vendor-sidebar.php'; ?> 
		</div>

			<div class="col-sm-9 page-content">

			<div class="inner-box">
			<div class="usearadmin">
			<h3><a href="#"><img class="userimg" src="assets/img/user-icon.png" alt=""> Waleed</a></h3>
			</div>
			</div>
			
		<div class="inner-box">
		<div class="welcome-msg">
		<h3 class="page-sub-header2 clearfix no-padding">Hello Waleed </h3>
		<span class="page-sub-header-sub small">You last logged in at: 01-03-2017 12:40 AM </span>
		</div>
		
		
<div id="accordion" class="panel-group">
<div class="panel panel-default">

		<div class="panel-heading">
		<h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> My details </a> </h4>
		</div>
		
			<div class="panel-collapse collapse in" id="collapseB1">
			<div class="panel-body">
			
			<form role="form">
			<div class="form-group">
			<label class="control-label">First Name</label>
			<input class="form-control" placeholder="Jhon" type="text">
			</div>
			
			<div class="form-group">
			<label class="control-label">Last name</label>
			<input class="form-control" placeholder="Doe" type="text">
			</div>
			
			<div class="form-group">
			<label class="control-label">Email</label>
			<input class="form-control" placeholder="jhon.deo&copy;example.com" type="email">
			</div>
			
			<div class="form-group">
			<label class="control-label">Address</label>
			<input class="form-control" placeholder=".." type="text">
			</div>
			
			<div class="form-group">
			<label for="Phone" class="control-label">Phone</label>
			<input class="form-control" id="Phone" placeholder="880 123 456789" type="text">
			</div>
			
					
			<div class="form-group">
			<button type="submit" class="btn btn-common">Update</button>
			</div>
			
			</form>
			</div>
			</div>
			</div>
			
				<div class="panel panel-default">
				<div class="panel-heading">
				<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB2" data-toggle="collapse"> Settings </a> </h4>
				</div>
				<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB2">
				<div class="panel-body">
				<form role="form">
				<div class="form-group">
				<div class="checkbox">
				<label><input type="checkbox">Comments are enabled on my ads </label>
				</div>
				</div>
				<div class="form-group">
				<label class="control-label">New Password</label>
				<input class="form-control" placeholder="" type="password">
				</div>
				<div class="form-group">
				<label class="control-label">Confirm Password</label>
				<input class="form-control" placeholder="" type="password">
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-common">Update</button>
				</div>
				</form>
				</div>
				</div>
				</div>
				
			<div class="panel panel-default">
			<div class="panel-heading">
			<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB3" data-toggle="collapse"> Preferences </a> </h4>
			</div>
			<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB3">
			<div class="panel-body">
			<div class="form-group">
			<div class="col-sm-12">
			<div class="checkbox">
			<label><input type="checkbox">I want to receive newsletter. </label>
			</div>
			<div class="checkbox">
			<label><input type="checkbox">I want to receive advice on buying and selling. </label>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			
				</div>
				</div>


				</div>
				</div>
				</div>
				</div>
    <!-- End Content -->

    	<?php include'footer.php';?>
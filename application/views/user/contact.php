<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Contact Us</title>
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
              <h2 class="page-title">Contact Us</h2>
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
<div class="col-md-8">
<h2 class="title-2">
Love to hear from you
</h2>

<form id="contactForm" class="contact-form" data-toggle="validator" novalidate="true">
<div class="row">
<div class="col-md-12">
<div class="row">

			<div class="col-md-12">
			<div class="form-group is-empty">
			<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="" data-error="Please enter your name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
			<div class="help-block with-errors"></div>
			<span class="material-input"></span></div>
			</div>
			
			<div class="col-md-12">
			<div class="form-group is-empty">
			<input type="email" class="form-control" id="email" placeholder="Email" required="" data-error="Please enter your email">
			<div class="help-block with-errors"></div>
			<span class="material-input"></span></div>
			</div>
			
			<div class="col-md-12">
			<div class="form-group is-empty">
			<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="" data-error="Please enter your subject">
			<div class="help-block with-errors"></div>
			<span class="material-input"></span></div>
			</div>
			
			</div>
			</div>
			
			<div class="col-md-12">
			<div class="row">
			<div class="col-md-12">
			<div class="form-group is-empty">
			<textarea class="form-control" placeholder="Message" rows="10" data-error="Write your message" required=""></textarea>
			 <div class="help-block with-errors"></div>
			<span class="material-input"></span></div>
			</div>
			</div>
			</div>
			
			<div class="col-md-12">
			<button type="submit" id="submit" class="btn btn-common disabled" style="pointer-events: all; cursor: pointer;">Send Your Message</button>
			<div id="msgSubmit" class="h3 text-center hidden"></div>
			<div class="clearfix"></div>
			</div>
			
				</div>
				</form>
				</div>
				
				
				<div class="col-md-4">
				<h2 class="title-2">
				Contact Information
				</h2>
				<div class="information">
				<div class="contact-datails">
				<div class="icon">
				<i class="fa fa-map-marker icon-radius"></i>
				</div>
				<div class="info">
				<h3>Address</h3>
				<span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
				<span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
				</div>
				</div>
				<div class="contact-datails">
				<div class="icon">
				<i class="fa fa-phone icon-radius"></i>
				</div>
				<div class="info">
				<h3>Phone Numbers</h3>
				<span class="detail">Main Office: +880 123 456 789</span>
				<span class="datail">Customer Supprort: +880 123 456 789 </span>
				</div>
				</div>
				<div class="contact-datails">
				<div class="icon">
				<i class="fa fa-location-arrow icon-radius"></i>
				</div>
				<div class="info">
				<h3>Email Address</h3>
				<span class="detail">Customer
				Support: info©mail.com</span>
				<span class="detail">Technical Support: support©mail.com</span>
				</div>
				</div>
				</div>
				</div>
</div>
</div>
</section>
    <!-- Content section End --> 
    
  <?php include'footer.php';?>
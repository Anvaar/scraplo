<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Hoodie</title>
	<meta name="description" content="">  
	<meta name="author" content="">	
	<?php include 'header.php'; ?>
	

</head>

  <body>  
  
   <?php include 'navigation.php'; ?>
  

    <!-- Search wrapper Start -->
    <div id="search-row-wrapper">
      <div class="container">
     <div class="search-inner">

<div class="row search-bar">
<div class="advanced-search">
<form class="search-form" method="get">


<div class="col-md-3 col-sm-6 search-col">
<div class="input-group-addon search-category-container">

<label class="styled-select">


<div class="btn-group bootstrap-select dropdown-product">



<div class="dropdown-menu open">

</div>
<select class="dropdown-product selectpicker" name="product-cat" tabindex="-98">
			<span class="bs-caret"><span class="caret"></span></span>
			 <option value="">All Categories</option>
			<option class="subitem" value="yarn" > Yarn</option>
			<option value="hoodie" selected="selected"> Hoodie</option>
			 <option value="t-shirts"> Full Sleeves T - Shirts</option>
			<option value="jackets"> Jackets</option>
			</select>

</div>
</label>
</div>
</div>


<div class="col-md-3 col-sm-6 search-col">
<div class="input-group-addon search-category-container">
<label class="styled-select location-select">
<div class="btn-group bootstrap-select dropdown-product">
<div class="dropdown-menu open">
</div>

			<select class="dropdown-product selectpicker" name="product-cat" tabindex="-98">
			<span class="bs-caret"><span class="caret"></span></span>
			
			<option value="">Select Locations</option>
			<option value="karachi">Karachi</option>
		    <option value="lahore">Lahore</option>
		    <option value="faisalabad">Faisalabad</option>
	        <option value="multan">Multan</option>
	        <option value="hyderabad">Hyderabad</option>
		    <option value="peshawar">Peshawar</option>
		    <option value="quetta">Quetta</option>
			
			</select>


</div>
</label>
</div>
</div>


<div class="col-md-3 col-sm-6 search-col">
<div class="form-group is-empty"><input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text"><span class="material-input"></span></div>
<i class="fa fa-search"></i>
</div>
 <div class="col-md-3 col-sm-6 search-col">
<button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
</div>
</form>
</div>
</div>

</div>
      </div>
    </div>
    <!-- Search wrapper End -->  

    <!-- Main container Start -->  
<div class="main-container">
<div class="container">
<div class="row">

  <?php include'inner-cat.php';?>
  
			<div class="col-sm-9 page-content">

			<div class="product-filter">
			<div class="grid-list-count">
			<a class="list switchToGrid active" href="#"><i class="fa fa-list"></i></a>
			<a class="grid switchToList" href="#"><i class="fa fa-th-large"></i></a>
			</div>

			<div class="short-name">
			<span>Short By</span>
			<form class="name-ordering" method="post">
			<label>
			<select name="order" class="orderby">
			<option selected="selected" value="menu-order">Short by</option>
			<option value="popularity">Price: Low to High</option>
			<option value="popularity">Price: High to Low</option>
			</select>
			</label>
			</form>
			</div>

			</div>


			<div class="adds-wrapper">

			<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post2.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">Brand New Hoodie</a></h5>
			
			<div class="info">
			<span class="add-type">A</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Hoodie</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#">New Stylish Hoodie Foe Men</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 599 </h2>


				</div>
				</div>

				<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post3.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">Bulk Quantity of Yarns</a></h5>
			
			<div class="info">
			<span class="add-type">B</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Yarn</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#">Lily Sugar'n Cream Cone Yarn</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 299 </h2>


				</div>
				</div>

					<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post1.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">New Full Sleeves T-Shirts</a></h5>
			
			<div class="info">
			<span class="add-type">A</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Full Sleeves T-Shirts</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#"> Pack of 3 - Multicolor Cotton Tshirts For Men</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 899 </h2>


				</div>
				</div>

					<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post4.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">Leather Jacket For Men</a></h5>
			
			<div class="info">
			<span class="add-type">A</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Jackets</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#">Leather Jacket For Men</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 699 </h2>


				</div>
				</div>

					<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post3.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">Bulk Quantity of Yarns</a></h5>
			
			<div class="info">
			<span class="add-type">B</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Yarn</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#">Lily Sugar'n Cream Cone Yarn</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 299 </h2>


				</div>
				</div>

			<div class="item-list make-list">
			<div class="col-sm-2 no-padding photobox">
			<div class="add-image">
			<a href="#"><img src="assets/img/item/post2.jpg" alt=""></a>
			<span class="photo-count"><i class="fa fa-camera"></i>2</span>
			</div>
			</div>

			<div class="col-sm-7 add-desc-box">
			<div class="add-details">
			<h5 class="add-title"><a href="ads-details.php">Brand New Hoodie</a></h5>
			
			<div class="info">
			<span class="add-type">A</span>
			
			<span class="date"><i class="fa fa-clock-o"></i> 10-11-2017</span> -
			<span class="category"><a href="#">Hoodie</a></span> -
			<span class="item-location"><i class="fa fa-map-marker"></i> Karachi</span>
			</div>
			
			<div class="item_desc">
			<a href="#">New Stylish Hoodie Foe Men</a>
			</div>
			
			</div>
			</div>

				<div class="col-sm-3 text-right  price-box">
				<h2 class="item-price"> Rs 599 </h2>


				</div>
				</div>

				</div>


<div class="pagination-bar">
<ul class="pagination">
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#"> ...</a></li>
<li><a class="pagination-btn" href="#">Next »</a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
    <!-- Main container End -->  

  <?php include'footer.php';?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Add Product</title>
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
			<div class="col-sm-12 col-md-10 col-md-offset-1">
			<div class="page-ads box">
			<h2 class="title-2">Post A Free Classified Ad</h2>

			

			<form class="form-ad">
			
				<?php echo form_open_multipart('vendor/add-product',['class'=>'form-horizontal']);?>
			<div class="form-group">
				<label for="" class="label-control">Title :</label>
				<input type="text" name="product_title" class="form-control" value="<?= set_value('product_title'); ?>">
				<?php echo form_error('product_title'); ?>
			</div>
			<div class="form-group">
			
			<label for="" class="label-control">SKU #</label>
				<input type="text" name="product_sku" class="form-control" value="<?= set_value('product_sku'); ?>">
				<?php echo form_error('product_sku'); ?>
				
			</div>
			<div class="form-group">
			
			<label for="" class="label-control">Images :</label>
		  <input type="file"  class="form-control" name="userfile[]" multiple>
			
			</div>
			<div class="form-group"><label for="" class="label-control">Price :</label>
				<input type="text" name="product_price" class="form-control" value="<?= set_value('product_price'); ?>">
				<?php echo form_error('product_price'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">Stock :</label>
				<input type="text" name="product_stock" class="form-control" value="<?= set_value('product_stock'); ?>">
				<?php echo form_error('product_stock'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">Minimum Order</label>
				<input type="text" name="product_min_order" class="form-control" value="<?= set_value('product_min_order'); ?>">
				<?php echo form_error('product_min_order'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">Grade :</label>
				 <?php 
                                $options = array(
                                        ''         => 'Please Select Grade',
                                        'A'           => 'A',
                                        'B'         => 'B',
                                        'C'        => 'C',
                                );

                                
                                echo form_dropdown('product_grade', $options, set_value('product_garde'), "class='form-control'");



                                 ?>
				<?php echo form_error('product_grade'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">Description :</label>
				<textarea name="product_descp" id="" cols="10" rows="5" class="form-control"><?= set_value('product_descp'); ?></textarea>
				<?php echo form_error('product_descp'); ?>
			</div>
			<div class="form-group pull-right"><label for="" class="label-control"></label>
				<button type="submit" class="btn btn-primary">Add</button>
			</div>
		</form>
			


		
				
				
				
					</div>
					</div>
					</div>
					</section>
    <!-- Content section End -->
<?php include'footer.php';?>
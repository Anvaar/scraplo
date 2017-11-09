<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <!--- basic page needs
   	================================================== -->
   	<meta charset="utf-8">
   	<title>Post Ads</title>
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

   					
   						<?php echo form_open_multipart('post-ads',['class'=>'form-ad']);?>
						
   						<div class="form-group mb30 is-empty">
   							<label class="control-label">Ad title</label> <input class="form-control input-md" name="product_title" placeholder="Write a suitable title for your ad" value="<?= set_value('product_title'); ?>"  type="text">
   							<span class="material-input">
   								<?php echo form_error('product_title'); ?>
   							</span>
   						</div>

   						<div class="form-group mb30 is-empty">
   							<label class="control-label" for="textarea">Describe ad</label>
   							<textarea class="form-control" id="textarea" name="product_descp" placeholder="Describe what makes your ad unique" rows="4"><?= set_value('product_descp'); ?></textarea>
   							<span class="material-input">
   								<?php echo form_error('product_descp'); ?>
   							</span>
   						</div>

   						<div class="form-group row">
   								<div class="form-group col-md-6 is-empty">
   									<label class="control-label" for="textarea">Stock Available</label>
   									<input class="form-control" placeholder="stock available"  name="product_stock" value="<?= set_value('product_stock'); ?>" >
   									<span class="material-input">
   										<?php echo form_error('product_stock'); ?>
   									</span>
   								</div>
   								<div class="form-group col-md-6 is-empty">
   									<label class="control-label" for="textarea">Minimum Order Quantity</label>
   										<input class="form-control" placeholder="minimum order quantity"  name="product_min_order" value="<?= set_value('product_min_order'); ?>" >
   									<span class="material-input">
   										<?php echo form_error('product_min_order'); ?>
   									</span>
   								</div>
   						</div>

<div class="form-group row">
	<div class="form-group col-md-6 ">
		<label class="control-label" for="textarea">Type</label>
		<?php 
		$options = array(
			''         => 'Select Type',
			'Hoodie'           => 'Hoodie',
			'Yarn'         => 'Yarn',
			'Jackets'         => 'Jackets',
			'Full Sleeves T-Shirts'  => 'Full Sleeves T-Shirts'
		);
	
	
		echo form_dropdown(['name'=>'product_type','class'=>'form-control'], $options);
	
	
	
		?>
	
		<span class="material-input">
			<?php echo form_error('product_type'); ?>
		</span>
	</div>
	<div class="form-group col-md-6 is-empty">
		<label class="control-label" for="textarea">Grade</label>
		<?php 
		$options = array(
			''         => 'Select Grade',
			'A'           => 'A',
			'B'         => 'B',
			'C'         => 'C'
		);
	
	
		echo form_dropdown(['name'=>'product_grade','class'=>'form-control'], $options);
	
	
	
		?>
	
		<span class="material-input">
			<?php echo form_error('product_grade'); ?>
		</span>
	</div>
</div>
<div class="form-group row">
	<div class="form-group col-md-6 is-empty">
		<label class="control-label" for="textarea">Condition</label>
		<?php 
		$options = array(
			''         => 'Select Condition',
			'New'           => 'New',
			'Old'         => 'Old'
		);


		echo form_dropdown(['name'=>'product_condition','class'=>'form-control'], $options);



		?>

		<span class="material-input">
			<?php echo form_error('product_condition'); ?>
		</span>
	</div>
	<div class="form-group col-md-6 clearfix">
		<label class="control-label" for="textarea">Price (Per Unit)</label>
		
		<input class="form-control" placeholder="per unit price" id="price" value="<?= set_value('product_price'); ?>" placeholder="Item Price" name="product_price" type="text">
	

		<span class="material-input">
			<?php echo form_error('product_price'); ?>
		</span>
		</div>


</div>





   							<h2 class="title-2">Add Images to Your Ad</h2>

   							<div class="form-group">
   								<label class="control-label">Featured Image</label> <input class="file" name="userfile" id="featured-img" type="file"><br>
   								<br>
   								<label class="control-label">Other Images</label> <input class="file" data-show-preview="false" id="gallery-img-a" type="file"><br>
   								<input class="file" data-show-preview="false" id="gallery-img-b" type="file"><br>
   								<input class="file" data-show-preview="false" id="gallery-img-c" type="file"><br>
   								<input class="file" data-show-preview="false" id="gallery-img-d" type="file">
   							</div>



   							<p class="help-block">Add up to 4 photos. Use a real image of your product, not catalogs.</p>
   								<button class="btn btn-common" type="submit">Submit for review</button>
   						</form>
   					</div>
   					<div class="mb30"></div>


   						</div>
   					</div>
   				</div>
   			</section>
   			<!-- Content section End -->
   			<?php include'footer.php';?>
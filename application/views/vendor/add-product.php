<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <?php require 'include.php'; ?>
</head>
<body>

<div class="container">
	<div class="col-md-6 col-md-offset-3" style="margin-top: 20px;">
		       <?php if($error = $this->session->flashdata('feedback'))  :
                                        $error_type = $this->session->flashdata('feedback_class');
                                        $error_sign = $this->session->flashdata('feedback_icon');
                                        ?>
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <div class="alert alert-dismissible <?= $error_type ?>">
                                               <i class="<?= $error_sign ?>" aria-hidden="true"></i></span>
                                                <?= $error ?>
                                              </div>
                                            </div>
                                          </div>
                                        <?php endif; ?>
		
			<?php echo form_open_multipart('vendor/add-product',['class'=>'form-horizontal']);?>
			<div class="form-group">
				<label for="" class="label-control">Title :</label>
				<input type="text" name="product_title" class="form-control" value="<?= set_value('product_title'); ?>">
				<?php echo form_error('product_title'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">SKU #</label>
				<input type="text" name="product_sku" class="form-control" value="<?= set_value('product_sku'); ?>">
				<?php echo form_error('product_sku'); ?>
			</div>
			<div class="form-group"><label for="" class="label-control">Images :</label>
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



<?php require 'footer.php'; ?>
</body>
</html>
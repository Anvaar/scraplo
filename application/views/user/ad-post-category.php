<div class="row search-bar mb30 red-bg">
	<div class="advanced-search">
		<form class="search-form" method="get">
			<div class="col-md-4 col-sm-12 search-col">
				<div class="input-group-addon search-category-container">
					<label class="styled-select">

						<span class="hidden-sm hidden-xs">Type </span>


						<?php 
						$options = array(
							''         => 'Select Type',
							'Hoodie'           => 'Hoodie',
							'Yarn'         => 'Yarn',
							'Jackets'         => 'Jackets',
							'Full Sleeves T-Shirts'  => 'Full Sleeves T-Shirts'
						);


						echo form_dropdown(['name'=>'product_type','class'=>'dropdown-product selectpicker'], $options);



						?>
						<?php echo form_error('product_type'); ?>



					</label>
				</div>
			</div>

			<div class="col-md-4 col-sm-12 search-col">
				<div class="input-group-addon search-category-container">
					<label class="styled-select location-select">
						<span class="hidden-sm hidden-xs">Grade </span>

						<?php 
						$options = array(
							''         => 'Select Grade',
							'A'           => 'A',
							'B'         => 'B',
							'C'         => 'C'
						);


						echo form_dropdown(['name'=>'product_grade','class'=>'dropdown-product selectpicker'], $options);



						?>
						<?php echo form_error('product_grade'); ?>
					</label>
				</div>
			</div>


			<div class="col-md-4 col-sm-12 search-col">
				<div class="input-group-addon search-category-container">
					<label class="styled-select default-select"><span class="hidden-sm hidden-xs">Condition </span>

						<?php 
						$options = array(
							''         => 'Select Condition',
							'New'           => 'New',
							'Old'         => 'Old'
						);


						echo form_dropdown(['name'=>'product_condition','class'=>'dropdown-product selectpicker'], $options);



						?>
						<?php echo form_error('product_condition'); ?>
					</label>
				</div>
			</div>
		</form>
	</div>
</div>
<?php 

$config = [



'contact_form'			=>	[
														[
															'field'	=>	'fullname',
															'label'	=>	'full name',
															'rules'	=>	'required|alpha_numeric_spaces|trim',
														],
														[
															'field'	=>	'phone',
															'label'	=>	'phone',
															'rules'	=>	'required|numeric|min_length[9]|max_length[9]|trim',
														],
														[
															'field'	=>	'email',
															'label'	=>	'email address',
															'rules'	=>	'required|valid_email|trim',
														],
														[
															'field'	=>	'message',
															'label'	=>	'message',
															'rules'	=>	'required|trim',
														]
							],
'add_product'			=>	[
														[
															'field'	=>	'product_title',
															'label'	=>	'product title',
															'rules'	=>	'required|max[20]|trim',
														],
														[
															'field'	=>	'product_sku',
															'label'	=>	'product SKU',
															'rules'	=>	'max[7]|trim',
														],
														[
															'field'	=>	'product_price',
															'label'	=>	'product price',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_stock',
															'label'	=>	'product stock',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_min_order',
															'label'	=>	'product minimum order',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_type',
															'label'	=>	'product type',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_condition',
															'label'	=>	'product condition',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_grade',
															'label'	=>	'product grade',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'product_descp',
															'label'	=>	'product description',
															'rules'	=>	'required|max_length[50]|trim',
														]
							]




]
















 ?>
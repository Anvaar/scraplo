<?php 

/**
* 
*/
class vendor_m extends CI_Model
{


	public function add_product($array,$images)
	{
		$details = array(
                    'title' =>  $array['product_title'],
                    'sku' =>  $array['product_sku'],
                    'price' =>  $array['product_price'],
                    'stock' =>  $array['product_stock'],
                    'min_order' =>  $array['product_min_order'],
                    'grade' => $array['product_grade'],
                    'description' =>  $array['product_descp'],
                    'created_on' => date('d/m/Y H:i:s'),
                    'modified_on' => date('d/m/Y H:i:s')

                  
                   );

		// print_r($images);
		// exit();


		if($this->db->insert('product_tbl', $details))
		{
			if($this->db->affected_rows())
			{
				$product_id = $this->db->insert_id();

				$filesCount = count($images);
				for($i = 0; $i < $filesCount; $i++){
					$data  = array(
						'product_id' => $product_id,
						'images' => $images[$i], 

					);	
					$this->db->insert('product_images', $data);
				}
				// if($this->db->insert_batch('product_images', $images))
				// {
				// 	return true;
				// }
				// else
				// {
				// 	return false;
				// }

			}
			return true;

		}
		else
		{
			return false;
		}

	}
}









 ?>
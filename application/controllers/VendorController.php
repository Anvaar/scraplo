<?php 


/**
* 
*/
class Vendorcontroller extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Vendor_m','vendor');
		$this->load->library('image_lib');



	}

	public function index()
	{
		echo "Vendor Controller";
	}

	public function add_product()
	{

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('add_product')) { //if validation passes
			$post = $this->input->post();

			 if(!empty($_FILES['userfile']['name'])){
		          $name_array = array();
            $count = count($_FILES['userfile']['size']);
            foreach ($_FILES as $key => $value) {
            	for ($s = 0; $s <= $count - 1; $s++) {

            		$_FILES['userfile']['name'] = $value['name'][$s];
            		$_FILES['userfile']['type'] = $value['type'][$s];
            		$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
            		$_FILES['userfile']['error'] = $value['error'][$s];
            		$_FILES['userfile']['size'] = $value['size'][$s];
            		$config['upload_path'] = './uploads/';
            		$config['allowed_types'] = 'gif|jpg|jpeg|png';
                 //$new_name = time().$user_id;
                // Rename file 
            		$config['file_name'] = 'myimages-'.$s;
               //$config['max_size'] = '100';
                //$config['max_width'] = '1024';
                //$config['max_height'] = '768';
            		$this->load->library('upload', $config);
            		$this->upload->do_upload();
            		$data[] = $this->upload->data();


            		$name_array[] = $data[$s]['file_name'];
                //$this->textWatermark($data['full_path']);
            		$this->image_resize($data[$s]['full_path']);
            		$this->textWatermark($data[$s]['full_path']);




            	}
            	echo $this->upload->display_errors();
                   //exit();
            }
     
                    
             }

             //$post = $name_array;       //$this->load->view('home');

			return $this->_flashAndRedirect(
						$this->vendor->add_product($post,$name_array),
						"Product has been added Successfully.",
						"Something went wrong. Please try Again Later.",
						"vendor/add-product"
					);
			//$this->vendor->add_product($post);
			//echo "success";
			//exit();
			// echo "<pre>";
			// print_r($name_array);
			// exit();



		} else {
			
			$this->load->view('vendor/add-product');
			
		}


		
		//echo "controller check";
	}

	public function textWatermark($source_image)
	{






        //The image path,which you would like to watermarking
		$config['wm_text'] = 'scraplo.com';
		$config['wm_type'] = 'text';
        //$config['wm_font_path'] = './fonts/atlassol.ttf';
		$config['wm_font_size'] = 50;
		$config['wm_font_color'] = '000000';
		$config['wm_vrt_alignment'] = 'bottom';
		$config['wm_hor_alignment'] = 'right';
        //$config['wm_padding'] = '20';
		$this->image_lib->initialize($config);
        //$this->image_lib->watermark();

        //$this->image_lib->resize();
		if (!$this->image_lib->watermark()) {
			return $this->image_lib->display_errors();
		}
		else{
			$this->image_lib->clear();
		}

	}

	public function image_resize($source_image)
	{


        //The image path,which you would like to watermarking
		$config['image_library'] = 'gd2';  
		$config['source_image'] = $source_image;  
		$config['create_thumb'] = TRUE;  
		$config['maintain_ratio'] = TRUE; 
		$config['new_image'] = $source_image;
		$config['dynamic_output'] = false;

        //$config['overwrite'] = TRUE;
		$config['quality'] = '60%';  
		$config['width'] = 500;  
		$config['height'] = 300;
		$this->image_lib->initialize($config);
		if (!$this->image_lib->resize()) {
			return $this->image_lib->display_errors();
		}
		else{
			$this->image_lib->clear();
		}

	}
	
}

?>
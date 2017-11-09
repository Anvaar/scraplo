<?php 


/**
* 
*/
class Usercontroller extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
				$this->load->model('User_m','user');
		$this->load->library('image_lib');

	}

	public function index()
	{
		$this->load->view('user/index');

		//echo "User Controller";
	}

	public function post_ads()
	{

				$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if($this->form_validation->run('add_product')) { //if validation passes
			$post = $this->input->post();
			// echo "<pre>";
			// print_r($post);
			// exit();

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
						$this->user->add_product($post,$name_array),
						"Product has been added Successfully.",
						"Something went wrong. Please try Again Later.",
						"post-ads"
					);
			//$this->vendor->add_product($post);
			//echo "success";
			//exit();
			// echo "<pre>";
			// print_r($name_array);
			// exit();



		} else {
			
			$this->load->view('user/post-ads');
			
		}
		
		//echo "User Controller";
	}

	public function login()
	{
		$this->load->view('user/login');
		//echo "User Controller";
	}

	public function signup()
	{
		$this->load->view('user/signup');
		//echo "User Controller";
	}

		public function about()
	{
		$this->load->view('user/about');
		//echo "User Controller";
	}
	
}













 ?>
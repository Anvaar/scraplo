<?php 


/**
* 
*/
class MY_Controller extends CI_Controller
{
	 public function _flashAndRedirect( $successful, $successMessage, $failureMessage,$successpage )
    {
        if( $successful ) {
            $this->session->set_flashdata('feedback',$successMessage);
            $this->session->set_flashdata('feedback_class', 'alert-success');
            $this->session->set_flashdata('feedback_icon', 'fa fa-check-circle');
        } else {
            $this->session->set_flashdata('feedback', $failureMessage);
            $this->session->set_flashdata('feedback_class', 'alert-danger');
            $this->session->set_flashdata('feedback_icon', 'fa fa-exclamation-circle');
        }
        return redirect($successpage);
    }

}













 ?>
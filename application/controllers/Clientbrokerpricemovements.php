<?php
  class Clientbrokerpricemovements extends CI_Controller{
    public function view(){
    	if($this->session->userdata('broker','logged_in'))
      	{

	      $page['userdata_broker'] = $this->session->userdata('broker');
	      $page['title'] = "PriceMovements";


	       $this->load->view('client/template/header', $page);
	       $this->load->view('client/broker/brokerpricemovements');
	       $this->load->view('client/template/footer');
	    }
      	else{
	        $this->session->set_flashdata('logged_out','Please Log In...!');
	        redirect('loginbroker');
      	}
    }
  }
?>
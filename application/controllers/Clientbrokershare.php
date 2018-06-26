<?php
  class Clientbrokershare extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
      	$data['userdata_broker'] = $this->session->userdata('broker');
      	$data['categories']=$this->Client_broker_share_model->get_categories();
        $data['sector_details'] = $this->Client_broker_share_model->show_shares();

        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "Shares";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();

      	$this->load->view('client/template/header', $page);
      	$this->load->view('client/broker/brokershare', $data);
       	$this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

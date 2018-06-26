<?php
  class Clientbrokertransactions extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
      	$data['userdata_broker'] = $this->session->userdata('broker');
      	$data['transactions'] = $this->Client_broker_transactions_model->get_transactions();

        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "Transactions";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();


         $this->load->view('client/template/header', $page);
         $this->load->view('client/broker/brokertransactions', $data);
         $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

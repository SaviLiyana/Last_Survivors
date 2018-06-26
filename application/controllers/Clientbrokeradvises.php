<?php
  class Clientbrokeradvises extends CI_Controller{
    public function view(){

      if($this->session->userdata('broker','logged_in'))
      {
      	$data['userdata_broker'] = $this->session->userdata('broker');
          $data['gains'] = $this->Client_broker_advises_model->show_gain_data();
          $data['losses'] = $this->Client_broker_advises_model->show_loss_data();

          $page['userdata_broker'] = $this->session->userdata('broker');
          $page['title'] = "TakeAdvises";
          $page['turn'] = $this->Client_broker_home_model->get_current_turn();

         $this->load->view('client/template/header', $page);
         $this->load->view('client/broker/brokeradvises',$data);
         $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

<?php
  class Clientnewbrokeracc extends CI_Controller{
    public function view(){
      $page['userdata_broker'] = $this->session->userdata('broker');
      $page['title'] = "Home";

      $this->load->view('client/template/header', $page);
      $this->load->view('client/broker/newbrokeracc');
      $this->load->view('client/template/footer');
    }

    public function brokersave(){
      $success = $this->Client_broker_login_model->brokersave();
      if($success){
        $this->session->set_flashdata('broker_account_save_success',"Broker account has been saved successfully...!");
        redirect(base_url().'loginbroker');
      }
      else{
        $this->session->set_flashdata('broker_account_save_failed',"User name already exists or User reference code has been used...!");
        redirect('newbrokeracc');
      }
    }
  }
?>
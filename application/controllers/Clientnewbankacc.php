<?php
  class Clientnewbankacc extends CI_Controller{
    public function view(){

      $page['userdata_bank'] = $this->session->userdata('bank');
      $page['title'] = "New";

      $this->load->view('client/template/header2',$page);
      $this->load->view('client/bank/newbankacc');
      $this->load->view('client/template/footer');
    }

    public function save(){
      $success = $this->Client_bank_login_model->save();
      if($success){
        $this->session->set_flashdata('bank_account_success','Bank account has been saved successfully...!');
        redirect('loginbank');
      }
      else{
        $this->session->set_flashdata('bank_account_save_failed',"User name already exists...!");
        redirect('newbankacc');
      }
    }
  }
?>

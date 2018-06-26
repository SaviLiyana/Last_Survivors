<?php
    class ClientEditBank extends CI_Controller{
      public function view(){
        if($this->session->userdata('bank','logged_in'))
        {
          $page['userdata_bank'] = $this->session->userdata('bank');
          $page['title'] = "Edit";

          $data['userdata'] = $this->session->userdata('broker');
          $data['bankdata'] = $this->Client_bank_login_model->getbankuserdata();
          $this->load->view('client/template/header2',$page);
          $this->load->view('client/bank/editclientbank',$data);
          $this->load->view('client/template/footer');
        }
        else{
          $this->session->set_flashdata('logged_out','Please Log In...!');
          redirect('loginbank');
        }
      }

    public function updatebankpassword(){
      if($this->session->userdata('bank','logged_in'))
      {
        $success = $this->Client_bank_login_model->updatebankpassword();
        if($success){
          $this->session->set_flashdata('password_change_success',"Password Changed Success");
          redirect(base_url().'clientbankedit');
        }
        else{
          $this->session->set_flashdata('password_change_failed',"Passwords do not match");
          redirect(base_url().'clientbankedit');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbank');
      }
    }

    public function updatebankuser(){
      if($this->session->userdata('bank','logged_in'))
      {
        $success = $this->Client_bank_login_model->updatebankuser();
        if($success){
          redirect(base_url().'clienthome');
        }
        else{
          redirect(base_url().'clientbankedit');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbank');
      }
    }
  }
 ?>

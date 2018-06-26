<?php
  class Clientbrokereditprofile extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
         $page['userdata_broker'] = $this->session->userdata('broker');
         $page['title'] = "EditProfile";
          $page['turn'] = $this->Client_broker_home_model->get_current_turn();

         $data['userdata'] = $this->session->userdata('broker');
         $data['brokerdata'] = $this->Client_broker_login_model->getuserdata();

         $this->load->view('client/template/header', $page);
         $this->load->view('client/broker/brokereditprofile',$data);
         $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
	public function savepassword(){
    if($this->session->userdata('broker','logged_in'))
      {
        $success = $this->Client_broker_login_model->updatebrokerpassword();
        if($success){
          $this->session->set_flashdata('password_change_success',"Password Changed Success");
          redirect(base_url().'brokerhome');
        }
        else{
          $this->session->set_flashdata('password_change_failed',"Incorrect Old Password");
          redirect(base_url().'brokereditprofile');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

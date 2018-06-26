<?php
  class Login extends CI_Controller{

    public function view(){
      $this->load->view('admin/login/index');
    }

    public function adminlogin(){
      $un = $this->input->post('UserName');
      $pwd = $this->input->post('Password');
      $success = $this->Login_model->login($un, $pwd);
      if($success){
        $user_data = array(
          'user_id' => $success['br_id'],
          'user_name' => $success['firstName']. ' '. $success['lastName'],
          'logged_in' => true
        );
        $this->session->set_userdata('admin', $user_data);
        $this->session->set_flashdata('login_success','Login Sucessed...!');
        redirect('admin/startup');
      }
      else {
        $this->session->set_flashdata('login_failed','Bad user credential...!');
        redirect('admin');
      }
    }

    public function logout(){
      $this->session->unset_userdata('admin', 'user_id');
      $this->session->unset_userdata('admin', 'user_name');
      $this->session->unset_userdata('admin', 'logged_in');
      redirect('admin');
    }
  }
?>

<?php
class Clientloginbank extends CI_Controller
{
  public function view(){
    if(!$this->session->userdata('bank','logged_in'))
    {
      $page['userdata_bank'] = $this->session->userdata('bank');
      $page['title'] = "Login";

      $this->load->view('client/template/header2',$page);
      $this->load->view('client/bank/loginbank');
      $this->load->view('client/template/footer');
    }
    else{
      redirect('bankbook');
    }
  }

  public function login(){
    if(!$this->session->userdata('bank','logged_in'))
    {
      $uname = $this->input->post('uname1');
      $pwd = $this->input->post('pwd1');

      $success = $this->Client_bank_login_model->login($uname, $pwd);

      if($success)
      {
        $user_data = array(
          'user_id' => $success['uid'],
          'user_name' => $success['firstName']. ' '. $success['lastName'],
          'logged_in' => true
        );

        $this->session->set_userdata('bank',$user_data);
        $this->session->set_flashdata('login_success','Login Successed...!');
        redirect('bankbook');
      }

      else
      {
        $this->session->set_flashdata('login_failed','Bad User Credentials...!');
        redirect('loginbank');
      }
    }
  }

    public function logout(){
      if ($this->session->userdata('bank','logged_in'))
      {

        $this->session->unset_userdata('bank','user_id');
        $this->session->unset_userdata('bank','user_name');
        $this->session->unset_userdata('bank','logged_in');
        $this->session->set_flashdata('logout_success','Logout Successed!!!');
        redirect('loginbank');
      }
      else{
        $this->session->set_flashdata('not_logged',"Please login before access this module!!!");
        redirect('loginbank');
      }
    }

  }
?>

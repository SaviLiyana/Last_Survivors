<?php
class Clientloginbroker extends CI_Controller
{
    public function view(){
      if(!$this->session->userdata('broker','logged_in'))
      {
        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "Home";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();

        $this->load->view('client/template/header',$page);
        $this->load->view('client/broker/loginbroker');
        $this->load->view('client/template/footer');
      }
      else{
        redirect('brokerhome');
      }
    }

    public function login(){
      if(!$this->session->userdata('broker','logged_in'))
      {
        $uname = $this->input->post('uname');
        $pwd = $this->input->post('pwd');

        $success = $this->Client_broker_login_model->login($uname, $pwd);

        if($success)
        {
          $user_data = array(
            'user_id' => $success['uid'],
            'user_name' => $success['firstName']. ' '. $success['lastName'],
            'logged_in' => true
          );

          $this->session->set_userdata('broker',$user_data);
          $this->session->set_flashdata('login_success','Login Successed...!');
          redirect('brokerhome');
        }
        else
        {
          $this->session->set_flashdata('login_failed','Bad User Credentials...!');
          redirect('loginbroker');
        }
      }
    }

    public function logout(){
      if ($this->session->userdata('broker','logged_in'))
      {
        $this->session->unset_userdata('broker','user_id');
        $this->session->unset_userdata('broker','user_name');
        $this->session->unset_userdata('broker','logged_in');

        $this->session->set_flashdata('logout_success','Logout Successed!!!');
        redirect('loginbroker');
      }
      else{
        $this->session->set_flashdata('not_logged',"Please login before access this module!!!");
        redirect('loginbroker');
      }
    }
  }
?>

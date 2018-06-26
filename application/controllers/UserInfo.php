<?php
  class UserInfo extends CI_Controller{
    public function view(){
      if($this->session->userdata('admin','logged_in'))
      {
        $data['clients'] = $this->Users_model->get_clients();
        $page['title'] = "Users";
        $page['adminuser'] = $this->session->userdata('admin');
        $this->load->view('admin/template/header', $page);
        $this->load->view('admin/userInfo/index', $data);
        $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }
  }
 ?>

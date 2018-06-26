<?php
  class Startup extends CI_Controller{
    public function view(){
      if($this->session->userdata('admin','logged_in'))
      {
        $page['title'] = "Home";
        $page['adminuser'] = $this->session->userdata('admin');
        $this->load->view('admin/template/header',$page);
        $this->load->view('admin/startup/index');
        $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }

    public function start(){
      if($this->session->userdata('admin','logged_in'))
      {
      	$this->Startup_model->startup();
      	redirect('startup');
      }
      else {
        redirect('admin');
      }
    }
  }
?>

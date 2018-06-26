<?php
  class Clientdevelopers extends CI_Controller{
    public function view(){
      $page['userdata_broker'] = $this->session->userdata('broker');
      $page['title'] = "DevelopingTeam";
      $page['turn'] = $this->Client_broker_home_model->get_current_turn();
      $this->load->view('client/template/header', $page);
      $this->load->view('client/developers/team');
      $this->load->view('client/template/footer');
    }
  }
?>

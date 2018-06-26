<?php
  class Clientbrokerrankings extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
        $data['userdata_broker'] = $this->session->userdata('broker');
        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "Rankings";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();
        $data['rankings'] = $this->Client_broker_ranking_model->get_rankings();

        $this->load->view('client/template/header', $page);
        $this->load->view('client/broker/brokerrankings', $data);
        $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

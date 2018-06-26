<?php
  class Clientbrokershareselected extends CI_Controller{
    public function view($share_id){
      if($this->session->userdata('broker','logged_in'))
      {
         $data['share'] = $this->Client_broker_share_selected_model->show_one_share($share_id);
         $data['share_value'] = $this->Client_broker_share_selected_model->share_values($share_id);
         $data['buy_orders'] = $this->Client_broker_share_selected_model->buy_orders($share_id);
         $data['sell_orders'] = $this->Client_broker_share_selected_model->sell_orders($share_id);

         $page['userdata_broker'] = $this->session->userdata('broker');
         $page['title'] = "Shares";
         $page['turn'] = $this->Client_broker_home_model->get_current_turn();

         $this->load->view('client/template/header', $page);
         $this->load->view('client/broker/brokershareselected', $data);
         $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

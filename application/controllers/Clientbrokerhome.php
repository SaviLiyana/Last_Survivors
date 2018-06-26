<?php
  class Clientbrokerhome extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
      	$data['userdata_broker'] = $this->session->userdata('broker');
      	$data['filled_buying_orders'] = $this->Client_broker_home_model->get_filled_buying_orders();
      	$data['pending_orders'] = $this->Client_broker_home_model->get_pending_orders();

        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "Home";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();

        $this->load->view('client/template/header', $page);
        $this->load->view('client/broker/brokerhome', $data);
        $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }

    public function cancel_order($order_id){
      if($this->session->userdata('broker','logged_in'))
      {
        $success = $this->Client_broker_home_model->cancel_order($order_id);
        if($success){
          $this->session->set_flashdata('cancellation_success',"Youe order has been cancelled successfully..!");
            redirect(base_url().'brokerhome');
        }
        else{
          $this->session->set_flashdata('cancellation_denied',"Oops..! Something went wrong..!");
            redirect(base_url().'brokerhome');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

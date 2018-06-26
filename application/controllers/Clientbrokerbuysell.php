<?php
  class Clientbrokerbuysell extends CI_Controller{
    public function view(){
      if($this->session->userdata('broker','logged_in'))
      {
         $data['companydata'] =  $this->Shares_model->get_companies();
         $data['userdata'] = $this->session->userdata('broker');
         $data['bankbalance'] = $this->Order_model->show_balance();
         $data['filled_buying_orders'] = $this->Order_model->get_filled_buying_orders();
        $page['userdata_broker'] = $this->session->userdata('broker');
        $page['title'] = "BuySell";
        $page['turn'] = $this->Client_broker_home_model->get_current_turn();
         $this->load->view('client/template/header', $page);
         $this->load->view('client/broker/brokerbuysell', $data);
         $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
    public function save(){
      if($this->session->userdata('broker','logged_in'))
      {
        $success = $this->Order_model->save_order();
        if($success){
          $this->session->set_flashdata('buying_order_succes','Your buying order has been saved successfully...!');
          redirect(base_url().'/brokerbuysell');
        }
        else{
          $this->session->set_flashdata('buying_order_failed','Your buying order save has been failed...!');
          redirect('Clientbrokerbuysell');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
    public function sellingsave(){
      if($this->session->userdata('broker','logged_in'))
      {
        $success = $this->Order_model->save_sell();
        if($success){
          $this->session->set_flashdata('selling_order_succes','Your selling order has been saved successfully...!');
          redirect(base_url().'/brokerbuysell');
        }
        else{
          $this->session->set_flashdata('selling_order_failed','Your selling order save has been failed...!');
          redirect('Clientbrokerbuysell');
        }
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbroker');
      }
    }
  }
?>

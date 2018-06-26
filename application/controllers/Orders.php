<?php
  class Orders extends CI_Controller{
    public function view(){
      if($this->session->userdata('admin','logged_in'))
      {
      	$data['users'] = $this->Orders_model->get_users();
        $data['orders'] = $this->Orders_model->get_order_details();
        $page['title'] = "Orders";
        $page['adminuser'] = $this->session->userdata('admin');
        $this->load->view('admin/template/header', $page);
        $this->load->view('admin/orders/index', $data);
        $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }
  }
?>

<?php
  class Transactions extends CI_Controller{
    public function view(){
      if($this->session->userdata('admin','logged_in'))
      {
        $data['orders']=$this->Transactions_model->get_oderdetails();
        $page['title'] = "Transactions";
        $page['adminuser'] = $this->session->userdata('admin');
        $this->load->view('admin/template/header',$page);
        $this->load->view('admin/transaction/index', $data);
        $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }
  }
?>

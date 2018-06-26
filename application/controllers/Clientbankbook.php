<?php
  class Clientbankbook extends CI_Controller{
    public function view(){

      if($this->session->userdata('bank','logged_in'))
      {
        $page['userdata_bank'] = $this->session->userdata('bank');
        $page['title'] = "Book";

      	$data['userdata'] = $this->session->userdata('bank');
      	$data['bank_balance'] = $this->Client_bank_book_model->show_balance();
        $data['transactions'] = $this->Client_bank_book_model->get_transactions();
        $data['ref'] = $this->Client_bank_book_model->get_ref();

      	$this->load->view('client/template/header2',$page);
      	$this->load->view('client/bank/bankbook', $data);
  		  $this->load->view('client/template/footer');
      }
      else{
        $this->session->set_flashdata('logged_out','Please Log In...!');
        redirect('loginbank');
      }
    }
  }
?>

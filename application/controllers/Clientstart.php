<?php
  class Clientstart extends CI_Controller{
    public function view($page = 'index'){
      if(!file_exists(APPPATH.'views/client/start/'.$page.'.php')){
        show_404();
      }

      $this->load->view('client/start/'.$page);
    }
  }
?>
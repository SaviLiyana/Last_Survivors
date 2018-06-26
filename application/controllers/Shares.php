<?php
  class Shares extends CI_Controller{
    public function view(){
      if($this->session->userdata('admin','logged_in'))
      {
          $data['categories']=$this->Shares_model->get_categories();
          $data['sector_details'] = $this->Shares_model->get_companies();
          $page['title'] = "Shares";
          $page['adminuser'] = $this->session->userdata('admin');
          $this->load->view('admin/template/header', $page);
          $this->load->view('admin/share/index', $data);
          $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }

    public function create(){
      if($this->session->userdata('admin','logged_in'))
      {
        $data['categories'] = $this->Shares_model->get_categories();
        $page['title'] = "Shares";
        $page['adminuser'] = $this->session->userdata('admin');
        $this->load->view('admin/template/header', $page);
        $this->load->view('admin/share/create', $data);
        $this->load->view('admin/template/footer');
      }
      else {
        redirect('admin');
      }
    }

    public function save(){
      if($this->session->userdata('admin','logged_in'))
      {
        $success = $this->Shares_model->save_company();
        if($success){
          redirect(base_url());
        }
        else{
          redirect('admin/create');
        }
      }
      else {
        redirect('admin');
      }
    }
  }
?>

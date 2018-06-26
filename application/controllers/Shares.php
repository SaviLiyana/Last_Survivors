<?php
  class Shares extends CI_Controller{
    public function view($share_id = NULL){
      if($this->session->userdata('admin','logged_in'))
      {
        if($share_id == NULL){
            $data['categories']=$this->Shares_model->get_categories();
            $data['sector_details'] = $this->Shares_model->get_companies();
            $page['title'] = "Shares";
            $page['adminuser'] = $this->session->userdata('admin');
            $this->load->view('admin/template/header', $page);
            $this->load->view('admin/share/index', $data);
            $this->load->view('admin/template/footer');
        }
        else{
          $data['share'] = $this->Client_broker_share_selected_model->show_one_share($share_id);
          $data['share_value'] = $this->Client_broker_share_selected_model->share_values($share_id);
          $data['buy_orders'] = $this->Client_broker_share_selected_model->buy_orders($share_id);
          $data['sell_orders'] = $this->Client_broker_share_selected_model->sell_orders($share_id);

          $page['adminuser'] = $this->session->userdata('admin');
          $page['title'] = "Shares";

          $this->load->view('admin/template/header', $page);
          $this->load->view('admin/share/view', $data);
          $this->load->view('admin/template/footer');
        }
      }
      else {
        $this->session->set_flashdata('logged_out','Please Log In...!');
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

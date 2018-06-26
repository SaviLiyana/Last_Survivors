<?php
class Shares_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function get_categories(){
    $this->db->order_by('category_id');
    $quary=$this->db->get('categories');

    return $quary->result_array();
  }


  public function show_shares(){
    $this->db->join('categories','company.category_id = categories.category_id','left');
    $this->db->order_by('cid');
    $quary = $this->db->get('company');
    return $quary->result_array();
  }

  // public function get_companies(){
  //   $quary=$this->db->get('company');
  //   return $quary->result_array();
  // }

    public function get_companies(){
    $this->db->join('categories','company.category_id = categories.category_id','left');
    $quary = $this->db->get('company');
    return $quary->result_array();
  }
  public function save_company(){
      $data = array(
        'c_code' => $this->input->post('txt_code'),
        'c_name' => $this->input->post('txt_name'),
        'c_starting_share_value' => $this->input->post('txt_esp'),
        'c_current_share_value' => $this->input->post('txt_esp'),
        'c_tele' => $this->input->post('txt_tele'),
        'br_id' => 1, //need to remove br_id from the table
        'category_id' => $this->input->post('select-category')
      );
      return $this->db->insert('company', $data);
  }
}
 ?>
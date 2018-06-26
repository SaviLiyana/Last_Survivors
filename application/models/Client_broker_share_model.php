<?php
class Client_broker_share_model extends CI_Model{
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
    $quary = $this->db->get('company');
    return $quary->result_array();
  }
}
 ?>
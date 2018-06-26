<?php
class Client_broker_share_selected_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function show_one_share($share_id){
    $this->db->join('categories','company.category_id = categories.category_id','left');
    $this->db->where('cid', $share_id);
    $quary = $this->db->get('company');
    return $quary->row_array();
  }

  public function share_values($share_id){
    $this->db->select_max('market_id');
    $quary=$this->db->get('sharevalue');
    $market = $quary->row()->market_id;

    $this->db->where('market_id', $market-1);
    $this->db->where('cid', $share_id);
    $quary=$this->db->get('sharevalue');
    if ($quary->num_rows() > 0) {
      return $quary->row_array();
    }
  }

  public function buy_orders($share_id){
    $this->db->where('cid', $share_id);
    $this->db->where('  order_status_id', 1);
    $this->db->where('type', "buy");
    $this->db->order_by('amount', "desc");
    $quary = $this->db->get('orders');
    return $quary->result_array();
  }

  public function sell_orders($share_id){
    $this->db->where('cid', $share_id);
    $this->db->where('order_status_id', 1);
    $this->db->where('type', "sell");
    $this->db->order_by('amount', "asc");
    $quary = $this->db->get('orders');
    return $quary->result_array();
  }

}
?>

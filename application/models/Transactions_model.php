<?php
class Transactions_model extends CI_Model{

public  function __construct(){
    $this->load->database();
  }
public  function get_oderdetails(){
    $this->db->join('company','orders.cid = company.cid','left');
    $this->db->where('orders.order_status_id', 2);
    $this->db->or_where('orders.order_status_id', 4);
    $this->db->order_by('order_id');
    $quary = $this->db->get('orders');
    return $quary->result_array();
  }
}

 ?>

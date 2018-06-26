<?php
class Client_broker_transactions_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function get_transactions(){
        $sessionuser = $this->session->userdata('broker');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('brokeraccount');
        $brid = $query->row()->br_id;

        $query = $this->db->query("CALL GetTransaction($brid)");
        mysqli_next_result( $this->db->conn_id );
        return $query->result_array();

        // $this->db->join('company', 'orders.cid = company.cid', 'left');
        // $this->db->where('orders.br_id', $brid);
        // $this->db->where('orders.order_status_id', 2);
        // $this->db->or_where('orders.order_status_id', 3);
        // $this->db->or_where('orders.order_status_id', 4);
        // $query = $this->db->get('orders');
        // return $query->result_array();
  }

}
 ?>
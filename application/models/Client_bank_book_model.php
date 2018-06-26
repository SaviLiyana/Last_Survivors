<?php
  class Client_bank_book_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function show_balance(){
      $sessionuser = $this->session->userdata('bank');
      $this->db->where('uid', $sessionuser['user_id']);
      $query = $this->db->get('bankaccount');
      return $query->row()->balance;
    }

    public function get_ref(){
      $sessionuser = $this->session->userdata('bank');
      $this->db->where('uid', $sessionuser['user_id']);
      $query = $this->db->get('usertbl');
      return $query->row()->user_reference_number;
    }

    public function get_transactions(){
        $sessionuser = $this->session->userdata('bank');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('brokeraccount');
        $brid = $query->row()->br_id;

        $query = $this->db->query("CALL GetTransaction($brid)");
        mysqli_next_result( $this->db->conn_id );
        return $query->result_array();
    }
    
  }
?>

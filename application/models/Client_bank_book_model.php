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

    // public function show_book(){
    //   $sessionuser = $this->session->userdata('bank');
    //   $this->db->join('bank', 'usertbl.uid = ', 'left');
    //   // $this->db->where('ba_userName', $uname1);
    //   $query = $this->db->get('usertbl');

    //     // $this->db->join('company', 'orders.cid = company.cid', 'left');
    //     // $this->db->where('orders.br_id', $sessionuser['user_id']);
    //     // $this->db->where('orders.order_status_id', 1);
    //     // $this->db->where('orders.type', "buy");
    //     // $query = $this->db->get('orders');
    //     // return $query->result_array();

    //   $this->db->join('usertbl', 'bankaccount.uid = usertbl.uid', 'left');
    //   $this->db->where('ba_userName', $uname1);
    //   $this->db->where('ba_userPassword', $pwd1);
    //   // $this->db->where('br_type', 2);
    //   $query = $this->db->get('bankaccount');
    //   if($query->num_rows() == 1){
    //     return $query->row_array();
    //   }
      // else{
      //   return false;
      // }
    // }
  }
?>

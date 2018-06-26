<?php
  class Order_model extends CI_Model{
      public function __construct(){
          $this->load->database();
      }

      public function show_balance(){
        $sessionuser = $this->session->userdata('broker');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('bankaccount');
        return $query->row_array();
      }

      public function get_filled_buying_orders(){
        $sessionuser = $this->session->userdata('broker');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('brokeraccount');
        $brid = $query->row()->br_id;

        $sessionuser = $this->session->userdata('broker');
        $this->db->join('company', 'orders.cid = company.cid', 'left');
        $this->db->where('orders.br_id', $brid);
        $this->db->where('orders.order_status_id', 2);
        $this->db->where('orders.type', "buy");
        $query = $this->db->get('orders');
        return $query->result_array();
      }

      //Insert Order
      public function save_order(){
        $sessionuser = $this->session->userdata('broker');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('brokeraccount');
        $brid = $query->row()->br_id;
        $data = array(
            'type' => "buy",
            'amount' => $this->input->post('txt_price'),
            'qty' => $this->input->post('txt_qty'),
            'ba_id' => $this->input->post('txt_ba_id'),
            'br_id' => $brid,
            'cid'=> $this->input->post('select-company'),
            'order_status_id'=>1
          );
          $this->db->insert('orders', $data);
          //update bank account
          $price = $this->input->post('txt_price');
          $qty = $this->input->post('txt_qty');
          $amount = $price * $qty;
          $brbalance = $this->input->post('txt_balance');
          $data = array(
            'balance' => $brbalance - $amount
          );
          $this->db->where('uid', $sessionuser['user_id']);
          return $this->db->update('bankaccount', $data);
      }

      //Save Selling
      public function save_sell(){
        //get broker id
        $sessionuser = $this->session->userdata('broker');
        $this->db->where('uid', $sessionuser['user_id']);
        $query = $this->db->get('brokeraccount');
        $brid = $query->row()->br_id;
        //update order order_status_id = 4
        $orderid = $this->input->post('orderid');
        $data = array(
          'order_status_id' => 4
        );
        $this->db->where('order_id', $orderid);
        $this->db->update('orders', $data );
        //insert new selling order
        $this->db->where('order_id', $orderid);
        $query = $this->db->get('orders', $orderid);
        $data = array(
            'type' => "sell",
            'amount' => $this->input->post('sprice'),
            'qty' => $query->row()->qty,
            'ba_id' => $query->row()->ba_id,
            'br_id' => $query->row()->br_id,
            'cid'=> $query->row()->cid,
            'order_status_id'=>1,
            'buy_reference' => $orderid
          );
          return $this->db->insert('orders', $data);
      }


  }
 ?>

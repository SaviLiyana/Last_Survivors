<?php
	class Client_broker_home_model extends CI_Model{
		public function __construct(){
	        $this->load->database();
	    }

	    public function get_filled_buying_orders(){
	    	$sessionuser = $this->session->userdata('broker');
	    	$this->db->where('uid', $sessionuser['user_id']);
	    	$query = $this->db->get('brokeraccount');
	    	$brid = $query->row()->br_id;

	    	$query = $this->db->query("CALL fieled_buying_order($brid)");
        	mysqli_next_result( $this->db->conn_id );
        	return $query->result_array();
	    }

	    public function get_pending_orders(){
	    	$sessionuser = $this->session->userdata('broker');
	    	$this->db->where('uid', $sessionuser['user_id']);
	    	$query = $this->db->get('brokeraccount');
	    	$brid = $query->row()->br_id;

	    	$this->db->join('company', 'orders.cid = company.cid', 'left');
	    	$this->db->where('orders.br_id', $brid);
	    	$this->db->where('orders.order_status_id', 1);
	    	$query = $this->db->get('orders');
	    	return $query->result_array();
	    }

	    public function cancel_order($order_id){

	    	$this->db->where('order_id', $order_id);
	    	$query = $this->db->get('orders');
			$order_type = $query->row()->type;
			$order_ref = $query->row()->buy_reference;

			if($order_type == "buy"){
				$this->db->where('orders.order_id', $order_id);
				$query = $this->db->get('orders');
				$qty =  $query->row()->qty;
				$amount = $query->row()->amount;
				$retun_balance = ($qty * $amount);

		    	$sessionuser = $this->session->userdata('broker');
		    	$this->db->where('uid', $sessionuser['user_id']);
		    	$query = $this->db->get('bankaccount');
		    	$baid = $query->row_array();

		    	$data = array(
		    		'balance' => $baid['balance'] + $retun_balance
		    	);

				$this->db->where('ba_id', $baid['ba_id']);
				$this->db->update('bankaccount',$data);

				$this->db->where('orders.order_id', $order_id);

				$this->db->delete('orders');
				return true;
			}
			else if ($order_type == "sell"){

				$this->db->where('order_id', $order_ref);

				$data = array(
					'order_status_id'=>2
				);
				$this->db->update('orders',$data);

				$this->db->where('order_id', $order_id);
				$this->db->delete('orders');
				return true;

			}
			else{
				return false;
			}
	    }

			public function get_current_turn(){
				$this->db->select_max('market_id');
				$query = $this->db->get('market');
				$maxid = $query->row()->market_id;

				$this->db->where('market_id',$maxid);
				$query = $this->db->get('market');
				return $query->row()->turn_no;

			}
	}
 ?>

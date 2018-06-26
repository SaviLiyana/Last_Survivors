<?php
	class Orders_model extends CI_Model{
		public function __construct(){
	        $this->load->database();
	    }

      public function get_users(){
        $query = $this->db->get('usertbl');
        return $query->result_array();
      }

      public function get_order_details(){
        $this->db->join('order_status','orders.order_status_id = order_status.order_status_id','left');
				$this->db->join('company','orders.cid = company.cid', 'left');
				$this->db->join('brokeraccount','orders.br_id = brokeraccount.br_id', 'left');
				$this->db->join('usertbl','brokeraccount.uid = usertbl.uid', 'left');
				$this->db->where('orders.order_status_id', 1);
				$query = $this->db->get('orders');
				return $query->result_array();
      }
	}
 ?>

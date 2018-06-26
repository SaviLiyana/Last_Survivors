<?php
	class Client_broker_ranking_model extends CI_Model{
		public function __construct(){
	        $this->load->database();
	    }


	   	public function get_rankings(){
				$query = $this->db->query("CALL GetRanking()");
        mysqli_next_result( $this->db->conn_id );
	    	return $query->result_array();
	    }
	}
 ?>

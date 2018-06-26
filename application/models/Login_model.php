<?php
  class Login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function login($un, $pwd){
      $this->db->join('usertbl', 'brokeraccount.uid = usertbl.uid', 'left');
      $this->db->where('br_userName', $un);
      $this->db->where('br_userPassword', $pwd);
      $this->db->where('br_type', 1);
      $query = $this->db->get('brokeraccount');
      if($query->num_rows() == 1){
        return $query->row_array();
      }
      else{
        return false;
      }
    }
  }
 ?>

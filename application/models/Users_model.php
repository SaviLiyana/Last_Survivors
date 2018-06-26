<?php
class Users_model extends CI_Model{
  public function __construct(){
        $this->load->database();
    }

    public function get_clients(){
     
    $this->db->join('usertbl', 'brokeraccount.uid = usertbl.uid' ,'left');
    $this->db->where('brokeraccount.br_type', 2);
    $query = $this->db->get('brokeraccount');

      return $query->result_array();
    }
}
 ?>

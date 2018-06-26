<?php
class Client_broker_advises_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function show_gain_data(){
    $this->db->where('(((c_current_share_value-c_starting_share_value)/c_starting_share_value)*100) >=' , 50 );
    $quary=$this->db->get('company');
    return $quary->result_array();
  }

  public function show_loss_data(){
    $this->db->where('(((c_current_share_value-c_starting_share_value)/c_starting_share_value)*100) <=' , 20 );
    $quary=$this->db->get('company');
    return $quary->result_array();    
  }
  
}
?>

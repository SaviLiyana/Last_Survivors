<?php
  class Client_broker_login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function login($uname, $pwd){
      $this->db->join('usertbl', 'brokeraccount.uid = usertbl.uid', 'left');
      $this->db->where('br_userName', $uname);
      $this->db->where('br_userPassword', $pwd);
      $this->db->where('br_type', 2);
      $query = $this->db->get('brokeraccount');
      if($query->num_rows() == 1){
        return $query->row_array();
      }
      else{
        return false;
      }
    }

    //save broker
    public function brokersave(){
      //get saved user id
      $userrefcode = $this->input->post('txt_usercode');
      $this->db->where('user_reference_number', $userrefcode);
      $query = $this->db->get('usertbl');
      $userid = $query->row()->uid;

      $un = $this->input->post('txt_uname');
      $this->db->where('br_userName', $un);
      $this->db->or_where('uid', $userid);
      $query = $this->db->get('brokeraccount');
      $existun = $query->row_array();

      if(is_null($existun)){
        //insert broker
        $data = array(
          'br_userName' => $this->input->post('txt_uname'),
          'br_userPassword' => $this->input->post('txt_pwd'),
          'br_type' => 2,
          'uid' => $userid
        );
        return $this->db->insert('brokeraccount', $data);
      }
      else{
        return false;
      }
    }
    //get broker user data
    public function getuserdata(){
      $sessionuser = $this->session->userdata('broker');
      $this->db->join('usertbl', 'brokeraccount.uid = usertbl.uid', 'left');
      $this->db->where('usertbl.uid', $sessionuser['user_id']);
      $query = $this->db->get('brokeraccount');
      if($query->num_rows() == 1){
        return $query->row_array();
      }
      else{
        return false;
      }
    }
    //update broker password
    public function updatebrokerpassword(){
      $sessionuser = $this->session->userdata('broker');
      $oldpassword = $this->Client_broker_login_model->getuserdata()['br_userPassword'];
      $opwdtxt = $this->input->post('txt_opwd');
      if($oldpassword != $opwdtxt)
      {
        return false;
      }
      else
      {
        $data = array(
        'br_userPassword' => $this->input->post('txt_pwd')
        );
        $this->db->where('uid', $sessionuser['user_id']);
        return $this->db->update('brokeraccount', $data);
      }
    }
    
  }
?>
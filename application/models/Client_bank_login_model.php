<?php
  class Client_bank_login_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function login($uname1, $pwd1){
      $this->db->join('usertbl', 'bankaccount.uid = usertbl.uid', 'left');
      $this->db->where('ba_userName', $uname1);
      $this->db->where('ba_userPassword', $pwd1);
      // $this->db->where('br_type', 2);
      $query = $this->db->get('bankaccount');
      if($query->num_rows() == 1){
        return $query->row_array();
      }
      else{
        return false;
      }
    }

    public function getbankuserdata(){
        $sessionuser = $this->session->userdata('bank');
        $this->db->join('usertbl', 'bankaccount.uid = usertbl.uid', 'left');
        $this->db->where('usertbl.uid', $sessionuser['user_id']);
        $query = $this->db->get('bankaccount');
        if(count($query) == 1){
          return $query->row_array();
        }
        else{
          return false;
        }
      }
      //update bank password
      public function updatebankpassword(){
        $sessionuser = $this->session->userdata('bank');
        $this->db->join('usertbl', 'bankaccount.uid = usertbl.uid', 'left');
        $this->db->where('usertbl.uid', $sessionuser['user_id']);
        $query = $this->db->get('bankaccount');
        $opwdtxt = $this->input->post('txt_opwd');
        $oldpassword = $query->row()->ba_userPassword;
        if($oldpassword != $opwdtxt)
        {
          return false;
        }
        else
        {
          $data = array(
          'ba_userPassword' => $this->input->post('txt_pwd')
          );
          $this->db->where('uid', $sessionuser['user_id']);
          return $this->db->update('bankaccount', $data);
        }
      }
      //update broker user data
      public function updatebankuser(){
        $sessionuser = $this->session->userdata('bank');
        $data = array(
            'email' => $this->input->post('txt_email'),
            'tele' => $this->input->post('txt_tele'),
            'address' => $this->input->post('txt_add'),
            'firstName' => $this->input->post('txt_fname'),
            'lastName' => $this->input->post('txt_lname')
          );
        $this->db->where('uid', $sessionuser['user_id']);
        return $this->db->update('usertbl', $data);
      }

    public function save(){
      $this->db->where('ba_userName', $this->input->post('txt_uname'));
      $query = $this->db->get('bankaccount');
      $existun = $query->row_array();
      if($existun == NULL){
        //insert user
        $data = array(
            'email' => $this->input->post('txt_email'),
            'tele' => $this->input->post('txt_tele'),
            'address' => $this->input->post('txt_add'),
            'firstName' => $this->input->post('txt_fname'),
            'lastName' => $this->input->post('txt_lname'),
            'user_reference_number' => $this->input->post('usercode')
          );
        $this->db->insert('usertbl', $data);
        //get saved user id
        $userrefcode = $this->input->post('usercode');
        $this->db->where('user_reference_number', $userrefcode );
        $query = $this->db->get('usertbl');
        $userid = $query->row()->uid;
        //insert bankaccount
        $data = array(
          'ba_userName' => $this->input->post('txt_uname'),
          'ba_userPassword' => $this->input->post('txt_pwd'),
          'uid' => $userid,
          'balance' => 1000.00
        );
        return $this->db->insert('bankaccount', $data);
      }
      else {
        return false;
      }
  }
    
  }
?>

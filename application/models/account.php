<?php 
class Account extends CI_Model{
    public function account_info($account){
            $this->db->insert('account_information',$account);
    }
}

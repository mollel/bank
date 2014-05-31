<?php 
class Login_model extends CI_Model{
    public function validate(){
        //takeor grab the user input
        $username = $this->security->xss_clean($this->input->post("username"));
        $password = $this->security->xss_clean($this->input->post("password"));
        
        // prepare the items to querried on the database
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        // run the query 
        $querry = $this->db->get("users");
        
        //chek if there are any results
        if($querry->num_rows() == 1){
            //if there is a user create a session 
            /*$row = $querry->row();
            $data=array(
            'username'=>$row->username,
            'validated'=>true
            );
            $this->session->set_userdata($data);*/
            return true;
             }
            else{ //if the previous session didnot validate return false.
             return false;
            }
        
        
    }
    public function get_users(){
            $query =  $this->db->get('account_information');
            
            return $query->result();
            
            /*$query = $this->db->get('account_information');

    if ($query->num_rows())
    {   
        return $query->result_array();
    }else{
        echo 'Big Problem';
        die;
    }*/
    
}
}


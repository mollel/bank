<?php 
require(APPPATH.'/libraries/REST_Controller.php');
/**
 * Api
 * 
 * @package   
 * @author melleji
 * @copyright gencyolcu
 * @version 2014
 * @access public
 */
class Api extends Rest_Controller{
    /**
     * Api::compare_if_exist()
     * 
     * @return
     */
    public function compare_if_exist(){
        $this->load->model('usajili');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','trim|alpha|required|');
        $this->form_validation->set_rules('lastname','trim|alpha|required|');
        $this->form_validation->set_rules('surname','trim|alpha|required');
        $this->form_validation->set_rules('dateOfBith','trim|alpha|required');
        if($this->form_validation->run()== false){
            redirect('login/notRegistered');
        }
        else{
            $verify=array( 
            'fname' => $this->input->post('firstname'),
            'surname' => $this->input->post('surname'),
            'lname' => $this->input->post('lastname'),
            'gender' => $this->input->post('selection'),
            'phone' => $this->input->post('phoneNumber'),
            'address' => $this->input->post('address')
            );
        }
    }
}
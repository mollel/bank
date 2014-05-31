<?php 
class Login extends CI_Controller{
    public function index()
	{
 	   
		$this->load->view('admin/login_view');
    }
    public function process_user(){
        $this->load->model("login_model");
        //validate the user if it can log in
       if($this->login_model->validate()){
        $data['main_page'] = 'admin/main';
        $this->load->view('includes/template',$data);
       }
       else{
            //if the user didnot validate redirect to the dashboard.
            $this->index();
            
        }
    }
    public function dashboard(){
        $data['main_page'] = 'admin/main';
        $this->load->view('includes/template',$data);
        
    }
    public function registration_form(){
        $data['main_page'] = 'admin/registration_form';
        $this->load->view('includes/template',$data);
        }
     public function view_users(){
            $this->load->model('login_model');
            $data['query']=$this->login_model->get_users();
            //$this->load->view('includes/registered_users',$data);
            $data['main_page'] = 'admin/registered_users';
            $this->load->view('includes/template',$data);
            
        }
        //afunction to insert the required information into the database
     public function insert_account_info_into_database(){
        $accountno ='01j'.random_string(0000000000000,9999999999999);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','','trim|alpha|required|');
        $this->form_validation->set_rules('lastname','','trim|alpha|required|');
        $this->form_validation->set_rules('surname','','trim|alpha|required');
        $this->form_validation->set_rules('selection','','trim|required');
        $this->form_validation->set_rules('phoneNumber','phone number','trim|numeric|required');
        //$this->form_validation->set_rules('accountno','accountno','trim|required|xss_clean');
        $this->form_validation->set_rules('address','address','trim|required|xss_clean');
        
        //check the form validation if it exists
        if($this->form_validation->run() == FALSE){
            $this->registration_form();
        }
        
        else{
        $accountInfo = array(
            
            'fname' => $this->input->post('firstname'),
            'surname' => $this->input->post('surname'),
            'lname' => $this->input->post('lastname'),
            'gender' => $this->input->post('selection'),
            'phone' => $this->input->post('phoneNumber'),
            'accountno' => $accountno,
            'address' => $this->input->post('address')
            );
            
          $this->load->model('account');     
          $this->account->account_info($accountInfo);
            redirect('login/view_users');
          }
     }
    
        public function get_registered(){
            
            $this->load->model('login_model');
            $data['query']=$this->login_model->get_users();
            $this->load->view('includes/template',$data);

        
    }
      public function create_pdf_of_registered_user(){
        $this->load->helper('pdf_helper');
        $this->load->model('Login_model');
        $data['query']=$this->Login_model->get_users();
        $this->load->view('admin/user_information',$data);
      }
    public function add(){
        $data['main_page'] = 'admin/registration_form';
        $this->load->view('includes/template',$data);
    }
    public function notRegistered(){
        $this->load->view('admin/notFound');
        
    }
    }
    

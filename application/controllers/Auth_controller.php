<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('Auth_model');
        $this->load->library('user_agent');
        $this->load->library('form_validation');
    } 

	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('signup');
	}

	public function register_admin(){
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('contact','Contact', 'required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('company','Company Name','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('signup');
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'password' => md5($this->input->post('password')),
                'company' => $this->input->post('company')
            );
            $tablename = "tbl_admin";
            $this->Auth_model->register_data($tablename, $data);

            //REDIRECT TO THE LOGIN PANEL
            header('location:login');
        }
	}

	public function login_by_id(){ 
		$login_id=$this->input->post('email');
        $password=$this->input->post('password');
        $validate = $this->Auth_model->login_by_admin($login_id,$password);
        //USER LOGIN AND PUT THESE INFORMATION IN THE SESSION
        if($validate['status']=='Success' && $validate['data']!=''){
            $userdata = array(
                'email'=>$validate['data']['email'],
                'name'=>$validate['data']['name'],
                'contact'=>$validate['data']['contact'],
                'company'=>$validate['data']['company'],
                'logged_in'=>TRUE
            );
            $this->session->set_userdata('login_data',$userdata);

            //REDIRECT TO THE HOME PAGE/DASHBOARD    
            redirect('Home_controller/index');
            }else{
                redirect('Auth_controller/login');
            } 
	}

	public function logout(){
		$this->session->unset_userdata('login_data');
        redirect('Auth_controller/login');
	}

}

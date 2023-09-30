<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Home_model');
        // $this->load->library('user_agent');
        $log = $this->session->userdata('login_data');
		
		if (empty($log)) {
			redirect('Auth_controller/login');
		}
    } 

	public function index(){
        $data['user_data'] = $this->session->userdata('login_data');
		$this->load->view('dashboard',$data);
	}

    public function add_data(){
        $data['user_data'] = $this->session->userdata('login_data');
        $this->load->view('add_user',$data);
    }

    public function list(){
        $data['user_data'] = $this->session->userdata('login_data');
        $sess=$data['user_data']['name'];
        $data['list'] = $this->db->SELECT('*')->FROM('sub_user')->where('company_admin',$sess)->get()->result_array();

        $this->load->view('team_list',$data);
    }

    public function insert_user(){

        $userdata['user_data'] = $this->session->userdata('login_data');
        $sess = $userdata['user_data']['name'];
        $sess2 = $userdata['user_data']['company'];
        $data = array(
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
            'company_admin' => $sess,
            'company_name' => $sess2
        );

        $tablename = 'sub_user';
        // pr($data);die;
        $this->Home_model->insertData($tablename,$data);
        
        header('location:list');
        
    }


	

}

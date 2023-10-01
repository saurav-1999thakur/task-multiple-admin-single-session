<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('Auth_model');
		$this->load->model('Home_model');
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('contact','Contact', 'required');
        if($this->form_validation->run()==FALSE){
			$this->load->view('add_user',$userdata);
		}else{
            $data = array(
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'email' => $this->input->post('email'),
                'company_admin' => $sess,
                'company_name' => $sess2
            );
            $tablename = 'sub_user';
            $this->Home_model->insertData($tablename,$data);
            header('location:list');
        }
    }
    public function remove_user($id){
        $tablename="sub_user";
        $delete = $this->Home_model->delete_row($tablename,$id);
        if($delete==1){
            redirect('/Home_controller/list','refresh');
        }else{
            echo "failed";
        }
    }
    public function edit_user_data($id){
        $tablename="sub_user";
        $data['user_data'] = $this->session->userdata('login_data');
        $data['get']=$this->Home_model->get_data_by_id($tablename,$id)->row_array();
        $this->load->view('edit_user',$data);
    }
    public function update_user_by_id(){
        $tablename="sub_user";
        $id = $this->input->post('edit_id');
        $data=array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'contact'=>$this->input->post('contact')
        );
        $this->Home_model->update_data($tablename,$id,$data);
        header('location:list');
    }
	

}

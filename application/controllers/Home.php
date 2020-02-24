<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('CommonModel','common');
    }
	
	public function index()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('layouts/vwHeader',$data);
		$this->load->view('vwHome');
		$this->load->view('layouts/vwFooter');
		
	}	

	
	public function contact()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('layouts/vwHeader',$data);
		$this->load->view('vwContact');
		$this->load->view('layouts/vwFooter');
		
	}	


	
	public function login()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('layouts/vwHeader',$data);
		$this->load->view('vwLogin');
		$this->load->view('layouts/vwFooter');
		
	}	

	public function register()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('layouts/vwHeader',$data);
		$this->load->view('vwSignup');
		$this->load->view('layouts/vwFooter');
		
	}	
	public function userdashboard()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('layouts/vwHeader',$data);
		$this->load->view('vwUserDashboard');
		$this->load->view('layouts/vwFooter');
		
	}	
	
	public function createAccount()
	{
		$data = array();
		
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['first_name'] = $this->input->post('first_name');
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('accounts',$data))
		{
			$this->session->set_flashdata('success', 'Account Successfully Created! ');
			redirect('login');		
		}
		else
		{
			$this->session->set_flashdata('error', 'Account Not Created!.');
			redirect('register');		
		}
	}	
		
	public function AuthProcess()
	{
        $user = $this->input->post('username');  
        $pass = $this->input->post('password');  
		
		$result = $this->common->verifyAccount($user,$pass);
		
		if(!empty($result))
		{
			$userid = $result['id'];

            $this->session->set_userdata(array('userid'=>$userid,'username'=>$user));   
			$this->session->set_flashdata('welcome', 'Welcome ' . $user );
			redirect('user/dashboard');		
		}
		else
		{
			$this->session->set_flashdata('error', 'Invalid Credentials');
			redirect('login');
		}

	}	
	
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }	


}

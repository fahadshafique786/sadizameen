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
		
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['password'] = $_POST['password'];
		$data['first_name'] = $_POST['first_name'];
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('accounts',$data))
		{
			$this->session->set_flashdata('success', 'Account Successfully Created! added');
		}
		else
		{
			$this->session->set_flashdata('error', 'Account Not Created!.');
		}
		redirect('register');		
	}	
	
	
	


}

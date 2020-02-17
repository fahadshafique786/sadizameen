<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
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


}

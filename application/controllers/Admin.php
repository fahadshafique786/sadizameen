<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = "Sadi Zameen";		
		$this->load->view('admin/vwLogin');
	}	

	
	public function dashboard()
	{
		$data['title'] = "Sadi Zameen";
		$data['page_title'] = "Dashboard";
		
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/vwDashboard');
		$this->load->view('admin/layouts/vwFooter');
	}	

	public function simple_table()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/simple_table',$data);
		$this->load->view('admin/layouts/vwFooter');
		
	}	

	public function data_table()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/data_table',$data);
		$this->load->view('admin/layouts/vwFooter');
		
	}
	
	public function advanced()
	{
		$data['title'] = "Sadi Zameen";
		
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/advanced',$data);
		$this->load->view('admin/layouts/vwFooter');
		
	}	

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('CommonModel','common');
    }
	
	public function index()
	{
		$data['title'] = "Sadi Zameen";
		$data['page_title'] = "City";
		$data['sub_title'] = "Add New City";
		
		$data['list']	=	 $this->common->getAllData('sz_city','*',false);
			
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/vwCity',$data);
		$this->load->view('admin/layouts/vwFooter');
	}	

	public function saveCity()
	{
		$data = array();
		
		$data['name'] = $this->input->post('name');
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('sz_city',$data))
		{
			$this->session->set_flashdata('success', 'Data Successfully Saved! ');
		}
		else
		{
			$this->session->set_flashdata('error', 'Data Not Saved!.');
		}
		
		redirect('admin/city');		
	}	
		

}

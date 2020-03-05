<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('CommonModel','common');
    }
	
	public function index()
	{
		$data['title'] = "Sadi Zameen";
		$data['page_title'] = "Area";
		$data['sub_title'] = "Add New Area";
		
		$data['list']	=	 $this->common->getAllData('sz_area','*',false);
			
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/vwArea',$data);
		$this->load->view('admin/layouts/vwFooter');
	}	

	public function saveArea()
	{
		$data = array();
		
		$data['name'] = $this->input->post('name');
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('sz_area',$data))
		{
			$this->session->set_flashdata('success', 'Data Successfully Saved! ');
		}
		else
		{
			$this->session->set_flashdata('error', 'Data Not Saved!.');
		}
		
		redirect('admin/area');		
	}	
		

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('CommonModel','common');
    }
	
	public function index()
	{
		$data['title'] = "Sadi Zameen";
		$data['page_title'] = "Location";
		$data['pg'] = "location";
		$data['sub_title'] = "Add New Location";		
		$data['list']=$this->common->getAllData('sz_location','*',false);			
		$this->load->view('admin/layouts/vwHeader',$data);
		$this->load->view('admin/vwLocation',$data);
		$this->load->view('admin/layouts/vwFooter',$data);
	}	

	public function store()
	{
		$data = array();
		
		$data['name'] = $this->input->post('name');
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('sz_location',$data))
		{
			$this->session->set_flashdata('success', 'Data Successfully Saved! ');
		}
		else
		{
			$this->session->set_flashdata('error', 'Data Not Saved!.');
		}
		
		redirect('admin/location');		
	}	
		
		
		public function update($isAjax = true)
	{
		$data = array();
		
		$data['name'] = $this->input->post('name');

		$where['id']  = $this->input->post('hidden_key');

		if($this->common->update('sz_location',$data,$where))
		{
			$status = 1;
			$message = "Data Successfully Updated!";
		}
		else
		{
			$status = 0;
			$message = "Data Not Updated!";
		}
		
		echo json_encode(array('status'=>$status,'message'=>$message));
		exit();	
	}	
		

	public function destroy()
	{
		$data = array();
		
		$data['name'] = $this->input->post('name');
		$data['created_on'] = date("Y-m-d");

		if($this->common->create('sz_location',$data))
		{
			$this->session->set_flashdata('success', 'Data Successfully Saved! ');
		}
		else
		{
			$this->session->set_flashdata('error', 'Data Not Saved!.');
		}
		
		redirect('admin/location');		
	}	

}

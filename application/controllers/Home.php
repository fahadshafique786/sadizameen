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


}

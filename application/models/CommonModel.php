<?php
class CommonModel extends CI_Model 
{
	function create($table,$data)
	{
		$this->db->insert($table, $data);
		return ($this->db->affected_rows())  ?  true :  false ; 
	}
	
	function verifyAccount($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get('accounts');
		
		return ($query->num_rows() > 0)  ? $query->row_array()  : false;

	}
}
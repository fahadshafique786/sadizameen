<?php
class CommonModel extends CI_Model 
{
	function create($table,$data)
	{
		$this->db->insert($table, $data);
		return ($this->db->affected_rows())  ?  true :  false ; 
	}
}
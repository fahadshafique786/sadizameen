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

	function getAllData($table,$cols,$whereClause = false)
	{
		if($whereClause)
		{
			$this->db->where($whereClause);
		}
		
		$this->db->select($cols);
		$query = $this->db->get($table);
		
		return ($query->num_rows() > 0)  ? $query->result_array()  : false;

	}
	
	function getRowData($table,$cols,$clause = false)
	{
		$this->db->select($cols);
		$query = $this->db->get($table);
		
		return ($query->num_rows() > 0)  ? $query->row_array()  : false;
	}
	
	function update($table,$set,$whereClause)
	{
		if($whereClause )
		{
			$this->db->where($whereClause);
		}

		$this->db->set($set);
		$this->db->update($table);
		//$query  = $this->db->get();
		
		return ($this->db->affected_rows() > 0)  ? $this->db->affected_rows()  : false;
	}
	
	function erase($table,$clause = false)
	{
		$this->db->where($clause);
		$this->db->delete($table);
		return ($this->db->affected_rows() > 0)  ? $this->db->affected_rows()  : false;
	}
	
	function isExist($table,$whereClause = false)
	{
		if($whereClause)
		{
			$this->db->where($whereClause);
		}
		$query = $this->db->get($table);		
		return ($query->num_rows() > 0)  ? true  : false;
	}
	
	
}
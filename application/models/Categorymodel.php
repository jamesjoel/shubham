<?php
class Categorymodel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->tblName = "category";
		// Make global variable here, to access every function
	}
	function select_all()
	{
		return $this->db->get($this->tblName);
	}
	function select_by_id($id)
	{
		$this->db->where("id", $id);
		return $this->db->get($this->tblName);
	}
	function select_by_username($username)
	{
		// SELECT * FROM admin WHERE username='$username' OR mobile='$username'
		$this->db->where("username", $username);
		$this->db->or_where("mobile", $username);
		return $this->db->get($this->tblName);
	}
	function udpate_by_id($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update($this->tblName, $data);
	}
	function delete_by_id($id)
	{
		$this->db->where("id", $id);
		$this->db->delete($this->tblName);

	}
	function insert($data)
	{
		
		$this->db->insert($this->tblName, $data);
	}




}


?>
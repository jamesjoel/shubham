<?php
class Index extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model("adminmodel");
		// $this->load->helper("url");
	}
	function index()
	{
		$this->load->view("admin/login");
	}
	function auth()
	{
		// print_r($this->input->post());
		$u = $this->input->post("username");
		$p = sha1($this->input->post("pass"));
		$result=$this->adminmodel->select_by_username($u);
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("name", $data['name']);
				$this->session->set_userdata("is_admin_logged_in", true);
				$this->session->set_userdata("type", $data['type']);
				redirect("admin/dashboard");
			}
			else
			{
				$this->session->set_flashdata("username", $u);
				$this->session->set_flashdata("msg","This Password is Not Mached");
				redirect("admin/index");
			}
		}
		else
		{
			$this->session->set_flashdata("msg","This Username/Mobile Number Not Mached");
			redirect("admin/index");
		}
	}
}


?>
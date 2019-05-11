<?php
class Category extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->backdoor();
		$this->load->model("categorymodel");
	}

	function backdoor()
	{
		if(! $this->session->userdata('is_admin_logged_in'))
		{
			redirect("home");
		}
	}

	function index()
	{
		$result = $this->categorymodel->select_all();



		$pagedata = array("title"=>"Admin Dash", "pagename"=>"admin/category", "result"=>$result);
		$this->load->view("admin/layout", $pagedata);
	}
	function add()
	{
		$data['category_name']=$this->input->post("category_name");
		$this->categorymodel->insert($data);
		redirect("admin/category");
	}

	function delete($a)
	{
		$this->categorymodel->delete_by_id($a);
		redirect("admin/category");
	}
	

}
?>
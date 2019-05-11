<?php
class Product extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->backdoor();
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
		$pagedata = array("title"=>"Admin Dash", "pagename"=>"admin/product");
		$this->load->view("admin/layout", $pagedata);
	}
	

}
?>
<?php
class Admin extends CI_Controller{

	function index()
	{
		$pagedata = array("title"=>"Admin Dash", "pagename"=>"admin/dashboard");
		$this->load->view("admin/layout", $pagedata);
	}
	function product()
	{
		$pagedata = array("title"=>"Admin- Product", "pagename"=>"admin/product");
		$this->load->view("admin/layout", $pagedata);	
	}

}
?>
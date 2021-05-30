<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad extends CI_Controller {

	
	public function admin()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/footer');
	}
}

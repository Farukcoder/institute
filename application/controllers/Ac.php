<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ac extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
	}
		public function admin()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/footer');
	}
}

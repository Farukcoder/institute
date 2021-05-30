<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('downmenu');
		$this->load->view('demo');
		$this->load->view('si');
		// $this->load->view('footer');
	}
}
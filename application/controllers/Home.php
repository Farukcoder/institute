<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('downmenu');
		$this->load->view('home');
		$this->load->view('si');
		$this->load->view('footer');
	}

}

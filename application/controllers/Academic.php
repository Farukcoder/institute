<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
		public function routine()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('routine');
	}
			public function syllebus()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('syllebus');
	}
		public function probidhan()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('probidhan');
	}
}

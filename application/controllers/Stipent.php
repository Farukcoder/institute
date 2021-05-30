<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stipent extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}

	public function account()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('account');
	}
		public function sprofile()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('sprofile');
	}
}
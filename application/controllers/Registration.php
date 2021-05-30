<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
		public function newregistration()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('newregistration');
	}
}
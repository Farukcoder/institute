<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
		public function photo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('photo');
	}
		public function vedio()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('vedio');
	}
}
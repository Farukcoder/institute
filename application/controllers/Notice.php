<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
	public function internal(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('internal');

	}
	public function board(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('board');

	}
}

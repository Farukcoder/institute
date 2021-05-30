<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('about');
	}
	public function mission()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('downmenu');
		$this->load->view('mission');
		
		$this->load->view('si');
		$this->load->view('footer');
	}
	public function history()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('downmenu');
		$this->load->view('history');
		$this->load->view('si');
		$this->load->view('footer');
	}
}

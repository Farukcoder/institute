<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('main_content');
		$this->load->view('sidebar');
		$this->load->view('foot');
		$this->load->view('footer');
	}

}

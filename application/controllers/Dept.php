<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept extends CI_Controller {

	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
	public function computer(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('computer');

	}
	public function electronics(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('electronics');

	}
		public function civil(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('civil');

	}
	public function refrigration(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('refrigration');

	}
		public function electrical(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('electrical');

	}
	public function rs(){
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('rs');

	}
}

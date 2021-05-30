<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Routine extends CI_Controller {
   
	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
	public function cseRoutine(){
	         $this->load->view('admin/header');
	         $this->load->view('admin/leftmenu');	
	         $this->load->view('admin/cseroutine');
	}
   	public function routine_save(){
	             
			
			     $dep_name=$this->input->post('dep_name', true);
                 $sem_name=$this->input->post('sem_name', true);
                 $shift=$this->input->post('shift', true);
                 $section=$this->input->post('section', true);
                 $day=$this->input->post('day', true);
                 $period1=$this->input->post('period1', true);
                 $period2=$this->input->post('period2', true);
                 $period3=$this->input->post('period3', true);
                 $period4=$this->input->post('period4', true);
			     $data=array(
			      'dep_name'=>$dep_name,
			      'sem_name'=>$sem_name,
			      'shift'=>$shift,
			      'section'=>$section,
			      'day'=>$day,
			      'period1'=>$period1,
			      'period2'=>$period2,
			      'period3'=>$period3,
			      'period4'=>$period4
			    );
			        $in=$this->db->insert('routine',$data);
			        $insert=
   
	}


}
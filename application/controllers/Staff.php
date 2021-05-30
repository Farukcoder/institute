<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
   
	
	public function demo()
	{
		$this->load->view('header');
		$this->load->view('leftmenu');
		$this->load->view('home');
	}
	
		public function staffadd()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/staffadd');
	}
		public function staff_save()
	    {
			
			     $dep_name=$this->input->post('dep_name', true);
                 $teacher_name=$this->input->post('teacher_name', true);
                 $designation=$this->input->post('designation', true);
                 $mobile=$this->input->post('mobile', true);
			     $data=array(
			      'dep_name'=>$dep_name,
			      'teacher_name'=>$teacher_name,
			      'designation'=>$designation,
			      'mobile'=>$mobile
			    );
  //  echo "<pre>";
		// print_r($data);exit;
			     
              $in=$this->db->insert('staff',$data);

   }

       public function stafflist()
    {
         
      $data['querry']=$this->db->select('*')->from('staff')->get()->result();
      
          echo $this->db->last_query($pesentlist_data);exit;
          // /echo $this->db->last_query($pesentlist_data);exit;
          $this->load->view('header');
          $this->load->view('leftmenu');
          $this->load->view('downmenu');
          $this->load->view('staff1',$data);
          $this->load->view('si');
          $this->load->view('footer');
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		
		
		$this->load->model('Student_model','Student');
		
   }
	

			public function studentadd()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/leftmenu');
		$this->load->view('admin/studentadd');
	}
			public function student_save()
	{
		         $dep_name=$this->input->post('dep_name', true);
                 $sem_name=$this->input->post('sem_name', true);
                 $shift=$this->input->post('shift', true);
                 $stu_name=$this->input->post('stu_name', true);
                 $mobile=$this->input->post('mobile', true);
                 $address=$this->input->post('address', true);
                 $guardian=$this->input->post('guardian', true);
                 $guardian_no=$this->input->post('guardian_no', true);
			     $data=array(
			      'dep_name'=>$dep_name,
			      'sem_name'=>$sem_name,
			      'shift'=>$shift,
			      'stu_name'=>$stu_name,
			      'mobile'=>$mobile,
			      'address'=>$address,
			      'guardian'=>$guardian,
			      'guardian_no'=>$guardian_no
			    );
  //  echo "<pre>";
		// print_r($data);exit;
              $in=$this->db->insert('student',$data);
	}
	       public function cstudentlist()
    {
         
      		// $data['querry']=$this->db->select('*')->from('student')->where('dep_name',1)->get()->result();
      		
          	$data=array(
			
			'all_data'            =>$this->Student->staffdata(),

			'row' 				  => $this->Student->studentdata(),
			
			
		);

          // / echo $this->db->last_query($pesentlist_data);exit;
          $this->load->view('header');
          $this->load->view('leftmenu');
          $this->load->view('downmenu');
          $this->load->view('student1', $data);
          $this->load->view('si');
          $this->load->view('footer');
    }
           public function estudentlist()
    {
         
      		// $data['querry']=$this->db->select('*')->from('student')->where('dep_name',1)->get()->result();
      		
          	$data=array(
			
			'all_data'            =>$this->Student->estaffdata(),

			'row' 				  => $this->Student->estudentdata(),
			
			
		);

          // / echo $this->db->last_query($pesentlist_data);exit;
          $this->load->view('header');
          $this->load->view('leftmenu');
          $this->load->view('downmenu');
          $this->load->view('Department/student2', $data);
          $this->load->view('si');
          $this->load->view('footer');
    }
     public function cvstudentlist()
    {
         
      		// $data['querry']=$this->db->select('*')->from('student')->where('dep_name',1)->get()->result();
      		
          	$data=array(
			
			'all_data'            =>$this->Student->cvstaffdata(),

			'row' 				  => $this->Student->cvstudentdata(),
			
			
		);

          // / echo $this->db->last_query($pesentlist_data);exit;
          $this->load->view('header');
          $this->load->view('leftmenu');
          $this->load->view('downmenu');
          $this->load->view('Department/student3', $data);
          $this->load->view('si');
          $this->load->view('footer');
    }
    
     public function rcstudentlist()
    {
      		
          	$data=array(
			
			'all_data'            =>$this->Student->rcstaffdata(),

			'row' 				  => $this->Student->rcstudentdata(),
			
			
		);
          $this->load->view('header');
          $this->load->view('leftmenu');
          $this->load->view('downmenu');
          $this->load->view('Department/student4', $data);
          $this->load->view('si');
          $this->load->view('footer');
    }
    public function elstudentlist(){
    	$data=array(
    	'all_data'             =>$this->Student->elstaffdata(),
    	'row'                  =>$this->Student->elstudentdata(),
    );
    	$this->load->view('header');
    	$this->load->view('leftmenu');
    	$this->load->view('downmenu');
    	$this->load->view('Department/student5',$data);
    	$this->load->view('si');
    	$this->load->view('footer');

    }
        public function rsstudentlist(){
    	$data=array(
    	'all_data'             =>$this->Student->rsstaffdata(),
    	'row'                  =>$this->Student->rsstudentdata(),
    );
    	$this->load->view('header');
    	$this->load->view('leftmenu');
    	$this->load->view('downmenu');
    	$this->load->view('Department/student6',$data);
    	$this->load->view('si');
    	$this->load->view('footer');

    }
}

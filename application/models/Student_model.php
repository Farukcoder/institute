<?php
class Student_model extends CI_Model {

  	public function __construct(){
			ob_start();
			parent::__construct();
		}
   	public function studentdata(){
		return $this->db->select('*')->from('student')->where('dep_name',1)->get()->result();
 

 	
}
 	public function staffdata(){
		return $this->db->select('*')->from('staff')->where('dep_name',1)->get()->result();
 

 	
}
	public function estudentdata(){
		return $this->db->select('*')->from('student')->where('dep_name',2)->get()->result();
 

 	
}
	public function estaffdata(){
		return $this->db->select('*')->from('staff')->where('dep_name',2)->get()->result();
 

 	
}
	public function cvstudentdata(){
		return $this->db->select('*')->from('student')->where('dep_name',3)->get()->result();
 

 	
}
	public function cvstaffdata(){
		return $this->db->select('*')->from('staff')->where('dep_name',3)->get()->result();
 

 	
}
   public function rcstudentdata(){
      return $this->db->select('*')->from('student')->where('dep_name',4)->get()->result();
   }
   public function rcstaffdata(){
   	return $this->db->select('*')->from('staff')->where('dep_name',4)->get()->result();
   }
   public function elstudentdata(){
   	return $this->db->select('*')->from('student')->where('dep_name',5)->get()->result();
   }
   public function elstaffdata(){
   	return $this->db->select('*')->from('staff')->where('dep_name',5)->get()->result();
   }
   public function rsstudentdata(){
   	return $this->db->select('*')->from('student')->where('dep_name',6)->get()->result();
   }
   public function rsstaffdata(){
   	return $this->db->select('*')->from('staff')->where('dep_name',6)->get()->result();
   }
}
?>
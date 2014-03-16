<?php 

class My_model extends CI_Model{
	
	function _construct(){
		
		parent::_construct();
	
		}
		
	function get_all(){
		$this->load->database();
		$query=$this->db->get('administrator');
		return $query->result();
		}
		
	function upload_data($data){
		$this->load->database();
/*		
			$data['fname'] 
			$data['lname'] 
			$data['phone'] 
			$data['praczip'] 
			$data['specialty'];
		
	*/	
		//$data['specialty'] = 1;
		$val = array(
		'FirstName'=> $data['fname'],
		'LastName'=>$data['lname'],
		'Email'=>$data['email'],
		'Phone'=>$data['phone'],
		'PracticeZipCode'=>$data['praczip'],
		'RequestDate' => date('Y-m-d'), 
		'Specialty_idSpecialty'=>$data['specialty'],
		'Status_2' => 'Temp'
		);
		$this->db->insert('doctortempregistration',$val);
		echo"Record Has Been Added!!";	
		
		}
	function sql_query(){
		$this->load->database();
		$sql = "Select * From administrator limit 3;";
		$query_sql=$this->db->query($sql);
		return $query_sql->result();
		}
}
	 
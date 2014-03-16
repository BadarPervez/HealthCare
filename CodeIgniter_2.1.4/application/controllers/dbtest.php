<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbtest extends CI_Controller {

	public function index()
	{
		
		$this->load->view('inputform');
		
	}
	
	public function work()
	{	$this->load->model('My_model');
		$data['query']=$this->My_model->get_all();
		
		$data['query_sql']=$this->My_model->sql_query();
		$this->load->view('dbtest', $data);
	}
	public function save_userinput(){
		
			
			$data['name'] = $this->input->post("name");
			$data['about'] = $this->input->post("about");
			$data['symptoms'] = $this->input->post("symptoms");
			$data['causes'] = $this->input->post("causes");
			$data['prevention'] = $this->input->post("preventions");
			$data['treatment']= $this->input->post("treatment");
	   echo $data['name']." ".$data['about']." ".$data['symptoms']." ".$data['causes']." ".$data['prevention']." ".$data['treatment'];
	  
	    $this->load->model('My_model');
  		$this->My_model->upload_data($data);
		echo"Record Has Been Added!!";	}
}


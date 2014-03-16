<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		
	//hello	
		
	}
	
	public function registrationForm()
	{	
		$this->load->view('doctorRegForm.html');
	}
	public function doctorTempRegistration(){
		
			
			$data['fname'] = $this->input->post("fname");
			$data['lname'] = $this->input->post("lname");
			$data['email'] = $this->input->post("email");
			$data['phone'] = $this->input->post("phone");
			$data['praczip'] = $this->input->post("praczip");
			$data['specialty'] = $this->input->post("specialty");
			echo $data['fname']." ".$data['lname']." ".$data['email']." ".$data['phone']." ".$data['praczip']." ".$data['specialty']." ";
	  
	    $this->load->model('registrationModel');
  		$this->registrationModel->registerDoctor($data);
		
	}
}


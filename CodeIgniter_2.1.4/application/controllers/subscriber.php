<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient
 *
 * @author badar
 */
class Subscriber extends CI_Controller {
    //put your code here
    public function registrationForm()
	{	
		$this->load->view('subscriberRegForm.html');
	}
	public function subscriberRegistration(){
		
			
			$data['username'] = $this->input->post("username");
			$data['email'] = $this->input->post("email");
			$data['password'] = $this->input->post("password");
			//echo $data['username']." ".$data['lname']." ".$data['email']." ".$data['phone']." ".$data['praczip']." ".$data['specialty']." ";
	  
	    $this->load->model('registrationModel');
  		$this->registrationModel->registerPatient($data);
		
	}
}

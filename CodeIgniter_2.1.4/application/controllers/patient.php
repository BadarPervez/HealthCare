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
class patient extends CI_Controller {
    //put your code here
    public function registrationForm()
	{	
		$this->load->view('subscriberRegForm.html');
	}
	public function save_userinput(){
		
			
			$data['fname'] = $this->input->post("fname");
			$data['lname'] = $this->input->post("lname");
			$data['email'] = $this->input->post("email");
			$data['phone'] = $this->input->post("phone");
			$data['praczip'] = $this->input->post("praczip");
			$data['specialty'] = $this->input->post("specialty");
			echo $data['fname']." ".$data['lname']." ".$data['email']." ".$data['phone']." ".$data['praczip']." ".$data['specialty']." ";
	  
	    $this->load->model('My_model');
  		$this->My_model->upload_data($data);
		
	}
}

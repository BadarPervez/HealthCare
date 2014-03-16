<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Secondcontoller extends CI_Controller {

	public function index()
	{
		$data['myvar']="Muhammad Salman Siddiqui";
		$this->load->view('my_page', $data);
	}
	
	public function work()
	{
		$this->load->view('welcome_message');
	}
}


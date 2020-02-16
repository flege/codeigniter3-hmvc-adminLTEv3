<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {	

	function index(){
		$this->load->view('login');
	}

	function logout(){ 
		$this->session->sess_destroy();
		redirect('login');
	}
}

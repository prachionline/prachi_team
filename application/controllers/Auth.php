<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Auth_model','auth');
	}

	public function index(){
		$this->data = array(
			"title"      => "Login",
			"inner_view" => "pages/login"
		);
		$this->load->view('layout/main',$this->data);
	}


	public function verify(){
		$post = $this->input->post();	

		if($this->auth->is_user($post)){
			echo "Login Success";
		}else{
			echo "Login Fialed";
		}		
	}
}
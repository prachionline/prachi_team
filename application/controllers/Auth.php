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

		if ($this->form_validation->run() == FALSE){
			
           $this->data = array(
				"title"      => "Login",
				"inner_view" => "pages/login"
			);
			$this->load->view('layout/main',$this->data);

        }else{

           	$post = $this->input->post();	

			if($this->auth->is_valid_user($post)){

				redirect(base_url('service'));

			}else{
				redirect(base_url());
			}	
        }			
	}
}
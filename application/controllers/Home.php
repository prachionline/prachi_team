<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $title;
	private $view;
	private $data;

	public function render(){

		$this->data = array(
			"title"      => $this->title,
			"inner_view" => "pages/".$this->view
		);

		$this->load->view('layout/main',$this->data);
	}

	public function index(){
		$this->view  = "home";
		$this->title ="home";
		$this->render();
	}

	public function about_us(){
		$this->view  = "about";
		$this->title = "About Us";
		$this->render();
	}

	public function service(){
		$this->view  = "service";
		$this->title = "service";
		$this->render();	
	}

	public function centers(){
		$this->view  = "gallery";
		$this->title = "gallery";
		$this->render();	
	}

	public function contact(){	
		$this->view  = "contact";
		$this->title = "contact";
		$this->render();	
	}

}

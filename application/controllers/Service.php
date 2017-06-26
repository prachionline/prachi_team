<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	private $title;
	private $view;
	private $data;

	function __construct(){
		parent::__construct();
	}

	public function render(){

		$this->data = array(
			"title"      => $this->title,
			"inner_view" => "pages/".$this->view
		);

		$this->load->view('layout/main',$this->data);
	}

	public function index(){
		$this->view  = "service";
		$this->title = "Service";
		$this->render();
	}

	public function pancard(){

		$this->view  = "service_detail";
		$this->title = "Service";
		$this->render();
	}

	public function pos_machine(){

		$this->view  = "service_detail";
		$this->title = "Service";
		$this->render();
	}

	public function aadhar_card(){

		$this->view  = "service_detail";
		$this->title = "Service";
		$this->render();
	}

	public function mone_transfer(){

		$this->view  = "service_detail";
		$this->title = "Service";
		$this->render();
	}

}
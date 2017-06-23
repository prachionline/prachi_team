<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function is_user($user_info){

		$this->db->select('*');

		$this->db->where(array(
			'email'=>$user_info['uname'],
			'pass'=>$user_info['pass']
		));

		$query = $this->db->get('users');

		$num_rows = $query->num_rows();

		if( $num_rows) return true;
		return false;
	}

}
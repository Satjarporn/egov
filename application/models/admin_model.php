<?php
class Admin_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_admin($slug = FALSE){
		if ($slug === FALSE){
		$query = $this->db->get('admin');
		return $query->row_array();
		}

		
		return $query->row_array();
	}

	

	public function set_admin(){
		$query = $this->db->get('users');
		$this->load->helper('url');
		$userid=$this->ion_auth->user()->row()->id;
		$data = array(
			'last_login' => date("Y-m-d H:i:s"),
			'user_num' => $query->num_rows()
		);
	}


	public function get_number_newuser(){
		$users = $this->db->get('users');
		$admin = $this->db->get('admin');
		$newuser = $users->num_rows() - $admin['user_num'];

		return $newuser;
			
	}

	

	
}
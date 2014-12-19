<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_user($slug = FALSE){
		if ($slug === FALSE){
		$query = $this->db->get('users');
		return $query->result_array();
		}

		$query = $this->db->get_where('users', array('id' => $slug));
		return $query->row_array();
	}

	public function update_user(){
		if ($this->ion_auth->logged_in()){
			$userid=$this->ion_auth->user()->row()->id;
			$data = array(
               'first_name' => $this->input->post('first_name'),
               'last_name' => $this->input->post('last_name'),
               'phone' => $this->input->post('phone')
            );

			$this->db->update('users', $data, "id = ".$userid);
		}
	}
}
<?php
class Task_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_task($slug = FALSE){
	if ($slug === FALSE)
	{
		$query = $this->db->get('task');
		return $query->result_array();
	}

	$query = $this->db->get_where('task', array('owner_ID' => $slug));
	return $query->row_array();
	}

	public function set_task()
	{
	$this->load->helper('url');
	$userid=$this->ion_auth->user()->row()->id;
	$data = array(
		'name' => $this->input->post('name'),
		'desc' => $this->input->post('desc'),
		'create_date' => date("Y-m-d H:i:s"),
		'last_update_date' => date("Y-m-d H:i:s"),
		'release_date' => date("Y-m-d H:i:s"),
		'owner_ID' => $userid,
		'owner_name' => $this->ion_auth->user()->row()->first_name." ".$this->ion_auth->user()->row()->last_name,
		'type' => $this->input->post('type')
	);

	return $this->db->insert('task', $data);
	}
}
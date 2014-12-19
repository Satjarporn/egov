<?php
class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			$id=$this->ion_auth->get_user_id();
				$data['user'] = $this->user_model->get_user($id);
				$this->load->view('user/edit',$data);
		}

		else{
		 	redirect('', 'refresh');
		}
	}

	/*public function send()
	{
		if ($this->ion_auth->logged_in())
		{
			if ($this->ion_auth->in_group('dev')) $this->load->view('developer_send');
			else if ($this->ion_auth->in_group('mentor')){
				$data['user'] = $this->user_model->get_mentor_user(1);
				$this->load->view('user/mentor/send',$data);
			}
			else if ($this->ion_auth->in_group('super')) $this->load->view('super_manager_send');
			else $this->load->view('manager_send',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_user');
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			redirect('user', 'refresh');
			//$this->load->view('templates/footer');
		}
		else{
			$this->user_model->set_user();
			redirect('user', 'refresh');
		}
	}*/
	public function update(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'first_name', 'required');
		$this->form_validation->set_rules('last_name', 'last_name', 'required');

		if ($this->form_validation->run() === FALSE){
			redirect('user', 'refresh');
		}
		else{
			$this->user_model->update_user();
			redirect('user', 'refresh');
		}
	}


	/*
	public function stop_rel(){
		$this->load->helper('form');
		$this->user_model->st_rel_user();
		redirect('user', 'refresh');
	}

	public function comment(){
		$this->load->helper('form');
		$this->user_model->comment_user();
		redirect('user', 'refresh');
	}

	public function delete($id){
		$this->user_model->delete_user($id);
		redirect('user', 'refresh');
	}*/
}
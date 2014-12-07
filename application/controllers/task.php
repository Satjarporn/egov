<?php
class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('task_model');
	}

	public function index()
	{
		$data['task'] = $this->task_model->get_task();

	//$this->load->view('templates/header', $data);
	$this->load->view('task/index', $data);
	//$this->load->view('templates/footer');
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			$this->load->view('task/create');
			//$this->load->view('templates/footer');
		}
		else{
			$this->task_model->set_task();
			$this->load->view('task/');
		}
	}
	public function delete($id){
		$this->task_model->delete_task($id);
		redirect('task', 'refresh');
	}
}
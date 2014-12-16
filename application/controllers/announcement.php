<?php
class Task extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('announcement_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			
			if ($this->ion_auth->in_group('super')){
				$this->load->view('announcement/create_announcement');
			}
			
			else {
				$data['announcement'] = $this->task_model->get_announcement();
				$this->load->view('announcement/all_announcement', $data);
			}
		}

		else{
		 	redirect('', 'refresh');
		}
	}

	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('topic', 'Topic', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');

		if ($this->form_validation->run() === FALSE){
			//$this->load->view('templates/header', $data);
			redirect('announcement', 'refresh');
			//$this->load->view('templates/footer');
		}
		else{
			$this->task_model->set_task();
			redirect('announcement', 'refresh');
		}
	}
	



}
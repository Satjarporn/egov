<?php
class Announcement extends CI_Controller {

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
				$data['announcement'] = $this->announcement_model->get_announcement();
				$this->load->view('announcement/create_announcement',$data);
			}
			
			else {
				$data['announcement'] = $this->announcement_model->get_announcement();
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
			$this->announcement_model->set_announcement();
			redirect('announcement', 'refresh');
		}
	}

	public function delete($id){
		$this->announcement_model->delete_announcement($id);
		redirect('announcement', 'refresh');
	}
	



}
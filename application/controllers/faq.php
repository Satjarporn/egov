<?php
class Faq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('faq_model');
	}

	public function index()
	{
		$data['faq'] = $this->faq_model->get_faq();
		$this->load->view('faq/index', $data);
	}

	public function edit(){
		$data['faq'] = $this->faq_model->get_faq();
		$this->load->view('faq/edit', $data);
	}

	public function edit10(){
		$this->faq_model->edit_10faq();
		redirect('faq/edit', 'refresh');
	}	
}
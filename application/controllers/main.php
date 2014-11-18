<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function profile()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('profile',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('profile');
	}
	public function task()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('manager_task',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function devtask()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('developer_task',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('developer_task');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
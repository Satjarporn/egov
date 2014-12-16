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
	public function __construct()  // load the model
	{
		parent::__construct();
		// $this->load->model('form_model');

	}

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			redirect('homepage', 'refresh');
		} else{
		 	$this->load->view('home');
		}
		//$this->load->view('home');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function homepage()
	{
		if ($this->ion_auth->logged_in())
		{
			if ($this->ion_auth->in_group('dev')) $this->load->view('developer_hp');
			else if ($this->ion_auth->in_group('mentor')) $this->load->view('mentor_hp');
			else $this->load->view('general_manager_hp');
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
			if ($this->ion_auth->in_group('dev')) $this->load->view('developer_task');
			else if ($this->ion_auth->in_group('mentor')) $this->load->view('mentor_task');
			else $this->load->view('manager_task',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	public function mentortask()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('mentor_task',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('developer_task');
	}

	public function send()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('dev')) $this->load->view('developer_send');
			else if ($this->ion_auth->in_group('dev')) $this->load->view('mentor_send');
			else $this->load->view('manager_send',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}

	public function progress()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			if ($this->ion_auth->in_group('dev')) $this->load->view('developer_progress');
			else $this->load->view('manager_progress',$data);
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

	public function devsend()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('developer_send',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('developer_task');
	}

	public function devprogress()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('developer_progress',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('developer_task');
	}


	public function faq()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('FAQ',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_profile()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('edit_profile',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function admin()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('admin_hp',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_hp()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('edit_hp',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
	public function edit_faq()
	{
		if ($this->ion_auth->logged_in())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('edit_faq',$data);
		} else{
		 	redirect('', 'refresh');
		}
		// $this->load->view('manager_task');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
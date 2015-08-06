<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('admin_model');
		$this->load->library('bcrypt');
	}

	public function index()
	{
		if (!isset($_SESSION['username'])) {
			redirect('login');
		}

		$user = $_SESSION['username'];
		$data['title'] = 'Administracion de conektaradio';
		$data['admin'] = $user;
		$this->load->view('templates/default-admin', $data);
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]');

		if ($this->form_validation->run() !== false){
			$user = $this->input->post('username');
			$pass = $this->input->post('pwd');

			// Verificacion de usuario

		    $cryptedPwd = $this->admin_model->getPass($user); 

		    if ($this->bcrypt->check_password($pass, $cryptedPwd)){
				    // Password does match stored password.
				    $_SESSION['username'] = $this->input->post('username');
		    		redirect('admin');
			}
		}
		$data['title'] = "Login administrativo certificaciones Eaton";
		$this->load->view('templates/login',$data);
	}

	public function logout(){
		session_unset();
		redirect('login');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
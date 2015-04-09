<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}

	// Seccion de programación
	public function programacion(){
		$this->load->view('header.php');
		$this->load->view('programacion.php');
		$this->load->view('footer.php');
	}
	public function renovando()
	{
		$this->load->view('header.php');
		$this->load->view('previo.php');
		$this->load->view('footer.php');
	}

}

/* End of file templates.php */
/* Location: ./application/controllers/templates.php */?>
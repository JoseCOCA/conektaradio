<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('conektado');
	}

	public function index()
	{
		$data['title'] = "inicio | conektaradio";
		$this->load->view('header.php',$data);
		$this->load->view('home.php');
		$this->load->view('footer.php');
	}

	// Seccion de programación
	public function programacion(){
		$data['title'] = "Programacion";
		$data['programa'] = $this->conektado->get("Programas");
		$this->load->view('header.php', $data);
		$this->load->view('programacion.php');
		$this->load->view('footer.php');
	}
	public function miFarmacia(){
		$data['title'] = "Mi Farmacia | Ahorro real en medicamentos";
		$this->load->view('header.php', $data);
		$this->load->view('miFarmacia.php');
		$this->load->view('footer.php');
	}
	public function renovando()
	{
		$data['title'] = "Renovando tus sentidos";
		$this->load->view('header.php', $data);
		$this->load->view('previo.php');
		$this->load->view('footer.php');
	}

}

/* End of file templates.php */
/* Location: ./application/controllers/templates.php */?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('conektado');
	}

	public function index()
	{
		$data['title'] = "inicio | conektaradio";
		$this->load->view('templates/default.php',$data);

	}

	public function home()
	{
		$home = $this->load->view('home',"",TRUE);
		echo $home;
	}

	// Seccion de programación
	public function programacion(){
		$data['title'] = "Programacion";
		$data['programa'] = $this->conektado->get("Programas");
		$programacion = $this->load->view('programacion.php', $data, TRUE);
		echo $programacion;
	}
	public function miFarmacia(){
		$data['title'] = "Mi Farmacia | Ahorro real en medicamentos";
		
		$miFarmacia = $this->load->view('miFarmacia.php',$data,TRUE);
		echo $miFarmacia;
	}
	public function renovando()
	{
		$data['title'] = "Renovando tus sentidos";
		$renovando = $this->load->view('previo.php',$data,TRUE);
		echo $renovando;
	}

	/*
	 * Ejemplo de ruteo con Angluar
	 */
	public function example()
	{
		$this->load->view('ruteo.html');
	}
}
/* End of file templates.php */
/* Location: ./application/controllers/templates.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('conektado');
	}

	public function index()
	{
		$data['title'] = "conektaradio : radio por internet";
		$data['musicaNueva'] = $this->conektado->get("Musica");
		$data['saludos'] = $this->conektado->get("saludos");
		$data['nota']	= $this->conektado->get("notas");

		$this->load->view('templates/default',$data);

	}

	public function home()
	{
		$data['musicaNueva'] = $this->conektado->get("Musica");
		$data['nota']	= $this->conektado->get("notas");
		$home = $this->load->view('home',$data,TRUE);
		echo $home;
	}

	// Seccion de programación
	public function programacion(){
		$data['title'] = "Programacion";
		$data['programa'] = $this->conektado->get("Programas");
		$programacion = $this->load->view('programacion', $data, TRUE);
		echo $programacion;
	}
	public function miFarmacia(){
		$data['title'] = "Mi Farmacia | Ahorro real en medicamentos";
		
		$miFarmacia = $this->load->view('miFarmacia',$data,TRUE);
		echo $miFarmacia;
	}
	public function renovando()
	{
		$data['title'] = "Renovando tus sentidos";
		$renovando = $this->load->view('previo',$data,TRUE);
		echo $renovando;
	}

	public function noticias()
	{
		$notaID = $this->input->post('idNota');
		if($notaID != ""){
			$data['noticia']	= $this->conektado->getNote($notaID);
			
		}else{
			$data = null;
		}

		if(!is_null($data)){

			$noticias = $this->load->view('noticias',$data,TRUE);
			echo $noticias;
		}
	}

	/*
	 * Ejemplo de ruteo con Angluar
	 */
	public function example()
	{
		$this->load->view('ruteo.html');
	}

	public function audios()
	{
		$audio = $this->input->post('audio');

		if(is_null($audio)){
			echo "error";
		}else{
			$data['audio'] = $audio;
			$audioView = $this->load->view('audioMN',$data,TRUE);
			echo $audioView;
		}

	}
}
/* End of file templates.php */
/* Location: ./application/controllers/templates.php */
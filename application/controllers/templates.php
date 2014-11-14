<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends CI_Controller {

	public function index()
	{
		$this->load->view('home.php');
	}

}

/* End of file templates.php */
/* Location: ./application/controllers/templates.php */?>
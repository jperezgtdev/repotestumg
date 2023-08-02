<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_usuarios');
	}

	public function index(){
		$resultados = $this->Model_usuarios->getAllUsers();
		$this->data['resultados'] = $resultados;
		$this->data['titulo'] = "Nuevo titulo";
		$this->load->view('vIndex', $this->data);
	}

	public function ejemplo(){
		echo "soy el ejemplo";
	}

	public function client(){
		$nombre		= $this->input->post('nombre');  
		$password 	= $this->input->post('password');
		echo $nombre."  ".$password;
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_usuarios extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getAllUsers(){
		$this->db->select('idusuario, usuario, pass');
		$this->db->from('usuario');
		$query = $this->db->get();
		return $query->result();
	}
}
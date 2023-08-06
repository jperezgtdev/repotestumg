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

	public function login($usuario, $password){
		$this->db->select('idusuario');
		$this->db->from('usuario');
		$this->db->where('usuario', $usuario);
		$this->db->where('pass', $password);
		$query = $this->db->get();
		return $query->row();
	}
}
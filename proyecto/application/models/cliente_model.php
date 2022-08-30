<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

	public function listaclientes()
	{
		$this->db->select('*');//select
		$this->db->from('cliente');//tabla
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function agregarcliente($data)
	{
		$this->db->insert('cliente',$data);//insert
	}

}

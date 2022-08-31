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

	public function eliminarcliente($idcliente)
	{
		$this->db->where('idcliente',$idcliente);//eliminar de bd
		$this->db->delete('cliente');
	}
	public function recuperarcliente($idcliente)
	{
		$this->db->select('*');//select
		$this->db->from('cliente');//tabla
		$this->db->where('idcliente',$idcliente);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarcliente($idcliente,$data)
	{
		$this->db->where('idcliente',$idcliente);//(bdd,formulario)
		$this->db->update('cliente',$data);//update
	}
}
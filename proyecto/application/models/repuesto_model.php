<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repuesto_model extends CI_Model {

	public function listarepuesto()
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('estado','1');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregarrepuesto($data)
	 {
		$this->db->insert('producto',$data);//insert
	}

	public function eliminarrepuesto($idproducto)
	{
		$this->db->where('idproducto',$idcliente);//eliminar de bd
		$this->db->delete('cliente');
	}
	public function recuperarrepuesto($idproducto)
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('idproducto',$idproducto);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarrepuesto($idproducto,$data)
	{
		$this->db->where('idproducto',$idproducto);//(bdd,formulario)
		$this->db->update('producto',$data);//update
	}
	public function listarepuestosdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
}

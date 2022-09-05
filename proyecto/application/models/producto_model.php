<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

	public function listaproductos()
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('estado','1');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregarproducto($data)
	 {
		$this->db->insert('producto',$data);//insert
	}

	public function eliminarcliente($idcliente)
	{
		$this->db->where('idcliente',$idcliente);//eliminar de bd
		$this->db->delete('cliente');
	}
	public function recuperarproducto($idproducto)
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('idproducto',$idproducto);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarproducto($idproducto,$data)
	{
		$this->db->where('idproducto',$idproducto);//(bdd,formulario)
		$this->db->update('producto',$data);//update
	}
	public function listaproductosdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('producto');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
}

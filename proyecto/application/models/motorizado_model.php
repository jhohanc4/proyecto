<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motorizado_model extends CI_Model {

	public function listamotorizados()
	{
		$this->db->select('m.idmotorizado,ct.idcategoria,c.idcliente,m.placa,m.marca,m.modelo,m.color,m.codigoChasis');//select
		$this->db->from('motorizado m');//tabla
		$this->db->join('cliente c', 'idcliente = idmotorizado');
		$this->db->join('categoria ct', 'idcategoria = idmotorizado');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregartorizado($data)
	 {
		$this->db->insert('motorizado',$data);//insert
	}

	public function eliminartorizado($idcliente)
	{
		$this->db->where('idmotorizado',$idcliente);//eliminar de bd
		$this->db->delete('motorizado');
	}
	public function recuperartorizado($idcliente)
	{
		$this->db->select('*');//select
		$this->db->from('motorizado');//tabla
		$this->db->where('idmotorizado',$idcliente);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificartorizado($idcliente,$data)
	{
		$this->db->where('idmotorizado',$idcliente);//(bdd,formulario)
		$this->db->update('motorizado',$data);//update
	}
	public function listatorizadosdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('motorizado');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motorizado_model extends CI_Model {

	public function listamotorizados()
	{
		$this->db->select('m.idmotorizado,c.nombreCategoria,cl.nombres,cl.apellidoPaterno,cl.apellidoMaterno,m.placa,m.marca,m.modelo,m.color,m.codigoChasis');//select
		$this->db->from('motorizado m');//tabla
		$this->db->join('categoria c', 'c.idcategoria = m.idcategoria');
		$this->db->join('cliente cl', 'cl.idcliente = m.idcliente');
		$this->db->where('m.estado','1');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregartorizado($data)
	 {
		$this->db->insert('motorizado',$data);//insert
	}

	public function eliminartorizado($idmotorizado)
	{
		$this->db->where('idmotorizado',$idcliente);//eliminar de bd
		$this->db->delete('motorizado');
	}
	public function recuperarmotorizado($idmotorizado)
	{
		$this->db->select('*');//select
		$this->db->from('motorizado');//tabla
		$this->db->where('idmotorizado',$idmotorizado);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarmotorizado($idmotorizado,$data)
	{
		$this->db->where('idmotorizado',$idmotorizado);//(bdd,formulario)
		$this->db->update('motorizado',$data);//update
	}
	public function listamotorizadosdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('motorizado');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
}

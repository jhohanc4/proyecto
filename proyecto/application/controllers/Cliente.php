<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index()
	{
		$lista=$this->cliente_model->listaclientes();
		$data['cliente']=$lista;

		$this->load->view('inc/header');
		$this->load->view('lista',$data);
		$this->load->view('inc/footer');
	}
	public function agregar()
	{

		$this->load->view('inc/header');
		$this->load->view('formulario');
		$this->load->view('inc/footer');
	}
	public function agregarbd()
	{
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['direccion']=$_POST['direccion'];
		$data['telefono']=$_POST['telefono'];

		$lista=$this->cliente_model->agregarcliente($data);
		redirect('cliente/index','refresh');
	}
}

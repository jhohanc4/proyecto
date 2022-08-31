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

	public function eliminarbd()
	{
		$idcliente=$_POST['idcliente'];
		$this->cliente_model->eliminarcliente($idcliente);
		redirect('cliente/index','refresh');
	}

	public function modificar()
	{
		$idcliente=$_POST['idcliente'];
		$data['infocliente']=$this->cliente_model->recuperarcliente($idcliente);

		$this->load->view('inc/header');
		$this->load->view('formulariomodificar',$data);
		$this->load->view('inc/footer');
	}

	public function modificarbd()
	{
		$idcliente=$_POST['idcliente'];

		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['direccion']=$_POST['direccion'];
		$data['telefono']=$_POST['telefono'];

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idcliente=$_POST['idcliente'];
		$data['estado']='0';

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->cliente_model->listaclientesdeshabilitados();
		$data['cliente']=$lista;

		$this->load->view('inc/header');
		$this->load->view('listadeshabilitados',$data);
		$this->load->view('inc/footer');
	}

	public function habilitarbd()
	{
		$idcliente=$_POST['idcliente'];
		$data['estado']='1';

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/deshabilitados','refresh');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motorizado extends CI_Controller {

	public function index()
	{
		$lista=$this->motorizado_model->listamotorizados();
		$data['motorizado']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('listamot',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function agregar()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulariomot');
		$this->load->view('inc/footersbadmin2');
	}

	public function agregarbd()
	{
		$data['idmotorizado']=$_POST['nombres'];
		$data['idcategoria']=$_POST['apellidopaterno'];
		$data['idcliente']=$_POST['apellidomaterno'];
		$data['placa']=$_POST['direccion'];
		$data['modelo']=$_POST['telefono'];

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
		$idmotorizado=$_POST['idmotorizado'];
		$data['infomotorizado']=$this->motorizado_model->recuperarmotorizado($idmotorizado);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulariomodificarmotorizado',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function modificarbd()
	{
		$idmotorizado=$_POST['idmotorizado'];

		$data['idcategoria']=$_POST['categoria'];
		$data['idcliente']=$_POST['cliente'];
		$data['placa']=$_POST['placa'];
		$data['modelo']=$_POST['modelo'];
		$data['color']=$_POST['color'];
		$data['codigoChasis']=$_POST['numeroChasis'];

		$this->motorizado_model->modificarmotorizado($idmotorizado,$data);
		redirect('motorizado/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idmotorizado=$_POST['idmotorizado'];
		$data['estado']='0';

		$this->motorizado_model->modificarmotorizado($idmotorizado,$data);
		redirect('motorizado/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->motorizado_model->listamotorizadosdeshabilitados();
		$data['motorizado']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('listadeshabilitadosmot',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd()
	{
		$idmotorizado=$_POST['idmotorizado'];
		$data['estado']='1';

		$this->motorizado_model->modificarmotorizado($idmotorizado,$data);
		redirect('motorizado/deshabilitados','refresh');
	}

	public function prueba()
	{
		$this->load->view('inc/headersbadmin2');
		$this->load->view('index');
		$this->load->view('inc/footersbadmin2');
	}
	public function registrarmotbd()
	{
		$this->load->view('inc/headersbadmin2');
		$this->load->view('formularioregistrarvehiculo');
		$this->load->view('inc/footersbadmin2');
	}
}

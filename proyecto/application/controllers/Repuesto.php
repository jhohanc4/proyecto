<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repuesto extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/headersbadmin2');
		$this->load->view('contenido');
		$this->load->view('inc/footersbadmin2');
	}
public function index1()
	{
		$lista2=$this->repuesto_model->listarepuesto();
		$data['cliente']=$lista2;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('lista2.php',$data);
		$this->load->view('inc/footersbadmin2');
	}
	public function agregar2()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('formulario2');
		$this->load->view('inc/footersbadmin2');
	}

	public function agregarbd2()
	{
		$data['nombreProducto']=$_POST['nombreproducto'];
		$data['unidadMedida']=$_POST['unidadmedida'];
		$data['caracteristicas']=$_POST['caracteristicas'];
		$data['marca']=$_POST['marca'];
		$data['stock']=$_POST['stock'];

		$lista2=$this->repuesto_model->agregarrepuesto($data);
		redirect('repuesto/index2','refresh');
	}

	public function eliminarbd2()
	{
		$idproducto=$_POST['idrproducto'];
		$this->repuesto_model->eliminarrepuesto($idproducto);
		redirect('repuesto/index2','refresh');
	}

	public function modificar2()
	{
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->repuesto_model->recuperarrepuesto($idproducto);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('formulariomodificarrepuesto',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function modificarbd2()
	{
		$idproducto=$_POST['idproducto'];

		$data['nombreProducto']=$_POST['nombreproducto'];
		$data['unidadMedida']=$_POST['unidadmedida'];
		$data['caracteristicas']=$_POST['caracteristicas'];
		$data['marca']=$_POST['marca'];
		$data['stock']=$_POST['stock'];

		$this->repuesto_model->modificarrepuesto($idproducto,$data);
		redirect('repuesto/index2','refresh');
	}

	public function deshabilitarbd2()
	{
		$idproductoe=$_POST['idcproducto'];
		$data['estado']='0';

		$this->repuesto_model->modificarrepuesto($idproducto,$data);
		redirect('repuesto/index2','refresh');
	}

	public function deshabilitados2()
	{
		$lista2=$this->repuesto_model->listarepuestosdeshabilitados();
		$data['repuesto']=$lista2;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('listadeshabilitados2',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd2()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='1';

		$this->repuesto_model->modificarrepuesto($idproducto,$data);
		redirect('repuesto/deshabilitados2','refresh');
	}
}

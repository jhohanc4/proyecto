<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function index()
	{
		$lista=$this->producto_model->listaproductos();
		$data['producto']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/listapro',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function agregar()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formulariopro');
		$this->load->view('inc/footersbadmin2');
	}

	public function agregarbd()
	{
		$data['nombreProducto']=$_POST['nombreproducto'];
		$data['cantidad']=$_POST['cantidad'];
		$data['unidadMedida']=$_POST['unidadmedida'];
		$data['caracteristicas']=$_POST['caracteristicas'];
		$data['marca']=$_POST['marca'];

		$lista=$this->producto_model->agregarproducto($data);
		redirect('producto/index','refresh');
	}

	public function eliminarbd()
	{
		$idcliente=$_POST['idcliente'];
		$this->cliente_model->eliminarcliente($idcliente);
		redirect('cliente/index','refresh');
	}

	public function modificar()
	{
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->producto_model->recuperarproducto($idproducto);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('modificar/formulariomodificarproducto',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function actualizar()
	{
		$idproducto=$_POST['idproducto'];
		$data['infoproducto']=$this->producto_model->recuperarproducto($idproducto);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formularioactualizarproducto',$data);
		$this->load->view('inc/footersbadmin2');
	}
	public function modificarbd()
	{
		$idproducto=$_POST['idproducto'];

		$data['nombreProducto']=$_POST['nombreproducto'];
		$data['unidadMedida']=$_POST['unidadmedida'];
		$data['caracteristicas']=$_POST['caracteristicas'];
		$data['marca']=$_POST['marca'];
		$data['unidadMedida']=$_POST['unidadmedida'];
		$data['cantidad']=$_POST['cantidad'];

		$this->producto_model->modificarproducto($idproducto,$data);
		redirect('producto/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='0';

		$this->producto_model->modificarproducto($idproducto,$data);
		redirect('producto/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->producto_model->listaproductosdeshabilitados();
		$data['producto']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/listadeshabilitadospro',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='1';

		$this->producto_model->modificarproducto($idproducto,$data);
		redirect('producto/deshabilitados','refresh');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$lista=$this->usuario_model->listausuarios();
		$data['usuario']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function agregar()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario_usuarios');
		$this->load->view('inc/footersbadmin2');
	}

	public function agregarbd()
	{
		$data['idcargo']=$_POST['cargo'];
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['contrasenia']=md5($_POST['contrasenia'].$_POST['nombres']);


		$data['login']=substr(str_shuffle($_POST['nombres'].$_POST['apellidopaterno'].$_POST['apellidomaterno']), 0, 8);

		$lista=$this->usuario_model->agregarusuario($data);
		redirect('usuario/index','refresh');
	}

	public function eliminarbd()
	{
		$idcliente=$_POST['idusuario'];
		$this->cliente_model->eliminarusuario($idusuario);
		redirect('usuario/index','refresh');
	}

	public function modificar()
	{
		$idusuario=$_POST['idusuario'];
		$data['infousuario']=$this->usuario_model->recuperarusuario($idusuario);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario_modificar_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function modificarbd()
	{
		$idusuario=$_POST['idusuario'];

		$data['idcargo']=$_POST['cargo'];
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idusuario=$_POST['idusuario'];
		$data['estado']='0';

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->usuario_model->listausuariosdeshabilitados();
		$data['usuario']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista_deshabilitados_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd()
	{
		$idusuario=$_POST['idusuario'];
		$data['estado']='1';

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/deshabilitados','refresh');
	}
}

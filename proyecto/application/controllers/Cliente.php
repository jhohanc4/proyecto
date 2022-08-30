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
}

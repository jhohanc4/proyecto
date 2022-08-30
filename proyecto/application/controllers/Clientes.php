<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('login');
		$this->load->view('inc/footer');
	}
}

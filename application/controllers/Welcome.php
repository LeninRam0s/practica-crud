<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function index(){
		$this->load->view('welcome_message');
	}
	//NUEVO METODO PARA LAS VISTAS

	public function vistas(){
		$this->load->view('vistas');
		
	}
}
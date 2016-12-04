<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('users');
	}

	public function index($page = 'home')
	{
		$data['title'] = ucfirst($page);
		$menu['menus'] = array(
			"Inicio/00",
			"Integrantes/01",
			"Redes Sociales/02",
			"Nosotros/03",
			"Galeria/04",
			"Contacto/05"
		);


		$this->load->view('users/templates/header', $data);
		if($page == 'home')
		{
			$this->load->view('users/secciones/head_menu', $menu);
      $this->load->view('users/secciones/intro');
      $this->load->view('users/secciones/player');
      //$this->load->view('users/secciones/eventos');
			$this->load->view('users/secciones/integrantes');
      $this->load->view('users/secciones/redes_sociales');
      $this->load->view('users/secciones/nosotros');
      //$this->load->view('users/secciones/podcast');
      //$this->load->view('users/secciones/programas');
      //$this->load->view('users/secciones/eventos_detalles');
      $this->load->view('users/secciones/galeria');
      //$this->load->view('users/secciones/noticias');
      $this->load->view('users/secciones/contacto');
		}
		$this->load->view('users/templates/footer', $data);
	}
}

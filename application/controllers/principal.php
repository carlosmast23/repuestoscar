<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model("categorias_model");
		$datos['combo_categoria'] = $this->categorias_model->combo_categorias_mdl();
		$this->load->view('index_view',$datos);
	}

	public function registrar() {
		$this->load->model("clientes_model");
		$fecha = date("Y-m-d");
		$hora = date("H:i:s");
		$arreglo = array(
			"cli_nombres" => $this->input->post("cli_nombres"),
			"cli_apellidos" => $this->input->post("cli_apellidos"),
			"cli_telefono" => $this->input->post("cli_telefono"),
			"cli_email" => $this->input->post("cli_email"),
			"cli_pedido" => $this->input->post("cli_pedido"),
			"cli_fecha" => $fecha . " " . $hora,
			"cli_estado" => 1,
			"cat_id" => $this->input->post("cat_id"),
			);
		$this->clientes_model->almacenar_cliente_mdl($arreglo);
		redirect(base_url() . 'principal/respuesta');
	}

	public function respuesta() {
		$this->load->view('respuesta_view');
	}

}

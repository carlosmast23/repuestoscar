<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("clientes_model");
    }

    public function index() {
        $cli_estado=$this->input->post("cli_estado");
        if($cli_estado=="")
            $datos = $this->clientes_model->index_clientes_mdl();
        else
            $datos = $this->clientes_model->buscar_clientes_mdl($cli_estado);

        $this->load->view('head');
        $this->load->view('clientes/index_clientes', $datos);
        $this->load->view('foot');
    }

    public function nuevo_cliente() {
        $this->load->view('head');
        $this->load->view('clientes/nuevo_cliente');
        $this->load->view('foot');
    }

    public function modificar_cliente() {
        $id = $this->uri->segment(3);
        $datos = $this->clientes_model->datos_cliente_mdl($id);
        $this->load->view('head');
        $this->load->view('clientes/modificar_cliente', $datos);
        $this->load->view('foot');
    }

    public function almacenar_cliente() {
        $arreglo = array(
            "cli_cedula" => $this->input->post("cli_cedula"),
            "cli_nombres" => $this->input->post("cli_nombres"),
            "cli_apellidos" => $this->input->post("cli_apellidos"),
            "cli_direccion" => $this->input->post("cli_direccion"),
            "cli_telefono" => $this->input->post("cli_telefono"),
            "cli_email" => $this->input->post("cli_email"),
            );
        $this->clientes_model->almacenar_cliente_mdl($arreglo);
        redirect(base_url() . 'clientes');
    }

    public function actualizar_cliente() {
        $id = $this->input->post("cli_id");
        $arreglo = array(
            "cli_estado" => $this->input->post("cli_estado"),
            "cli_respuesta" => $this->input->post("cli_respuesta"),
            "cli_presupuesto" => $this->input->post("cli_presupuesto"),
            );
        $this->clientes_model->actualizar_cliente_mdl($id, $arreglo);

        $this->clientes_model->enviar_mail($id);

        redirect(base_url() . 'clientes');
    }

    public function eliminar_cliente() {
        $id = $this->uri->segment(3);
        $this->clientes_model->eliminar_cliente_mdl($id);
        redirect(base_url() . 'clientes');
    }

}

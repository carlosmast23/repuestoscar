<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Categorias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("categorias_model");
    }

    public function index() {
        $datos = $this->categorias_model->index_categorias_mdl();
        $this->load->view('head');
        $this->load->view('categorias/index_categorias', $datos);
        $this->load->view('foot');
    }

    public function nuevo_categoria() {
        $this->load->view('head');
        $this->load->view('categorias/nuevo_categoria');
        $this->load->view('foot');
    }

    public function modificar_categoria() {
        $id = $this->uri->segment(3);
        $datos = $this->categorias_model->datos_categoria_mdl($id);
        $this->load->view('head');
        $this->load->view('categorias/modificar_categoria', $datos);
        $this->load->view('foot');
    }

    public function almacenar_categoria() {
        $arreglo = array(
            "cat_nombre" => $this->input->post("cat_nombre"),
            "cat_descripcion" => $this->input->post("cat_descripcion")
        );
        $this->categorias_model->almacenar_categoria_mdl($arreglo);
        redirect(base_url() . 'categorias');
    }

    public function actualizar_categoria() {
        $id = $this->input->post("cat_id");
        $arreglo = array(
            "cat_nombre" => $this->input->post("cat_nombre"),
            "cat_descripcion" => $this->input->post("cat_descripcion")
        );
        $this->categorias_model->actualizar_categoria_mdl($id, $arreglo);
        redirect(base_url() . 'categorias');
    }

    public function eliminar_categoria() {
        $id = $this->uri->segment(3);
        $this->categorias_model->eliminar_categoria_mdl($id);
        redirect(base_url() . 'categorias');
    }

}

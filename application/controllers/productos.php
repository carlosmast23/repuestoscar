<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("productos_model");
    }

    public function index() {
        $datos = $this->productos_model->index_productos_mdl();
        $this->load->view('head');
        $this->load->view('productos/index_productos', $datos);
        $this->load->view('foot');
    }

    public function lista_productos() {
        $cat_id=$this->input->post("cat_id");
        echo $this->productos_model->lista_productos_mdl($cat_id);
    }

    public function nuevo_producto() {
        $this->load->model("categorias_model");
        $datos['combo_categoria'] = $this->categorias_model->combo_categorias_mdl();
        $this->load->view('head');
        $this->load->view('productos/nuevo_producto', $datos);
        $this->load->view('foot');
    }

    public function modificar_producto() {
        $this->load->model("categorias_model");
        $id = $this->uri->segment(3);
        $datos = $this->productos_model->datos_producto_mdl($id);
        $datos['combo_categoria'] = $this->categorias_model->combo_categorias_mdl($datos['cat_id']);
        $this->load->view('head');
        $this->load->view('productos/modificar_producto', $datos);
        $this->load->view('foot');
    }

    public function almacenar_producto() {
        $arreglo = array(
            "rep_nombre" => $this->input->post("pro_nombre"),
            "rep_descripcion" => $this->input->post("pro_descripcion"),
            "rep_precio" => $this->input->post("pro_precio"),
            "cat_id" => $this->input->post("cat_id"),
        );
        $this->productos_model->almacenar_producto_mdl($arreglo);
        redirect(base_url() . 'productos');
    }

    public function actualizar_producto() {
        $id = $this->input->post("pro_id");
        $arreglo = array(
            "rep_nombre" => $this->input->post("pro_nombre"),
            "rep_descripcion" => $this->input->post("pro_descripcion"),
            "rep_precio" => $this->input->post("pro_precio"),
            "cat_id" => $this->input->post("cat_id"),
        );
        $this->productos_model->actualizar_producto_mdl($id, $arreglo);
        redirect(base_url() . 'productos');
    }

    public function eliminar_producto() {
        $id = $this->uri->segment(3);
        $this->productos_model->eliminar_producto_mdl($id);
        redirect(base_url() . 'productos');
    }

}

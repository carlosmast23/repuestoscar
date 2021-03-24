<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Categorias_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index_categorias_mdl() {

        $datos = "";
        $query = $this->db->query('SELECT * FROM categorias');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $cat_id = $value->cat_id;
                $datos.="<tr>";
                $datos.="<td>$value->cat_id</td>";
                $datos.="<td>$value->cat_nombre</td>";
                $datos.="<td>$value->cat_descripcion</td>";
                $datos.="<td><a class='btn btn-primary' href='" . base_url() . "categorias/modificar_categoria/$cat_id'>Modificar</a>";
                $datos.="|<a class='btn btn-danger' href='" . base_url() . "categorias/eliminar_categoria/$cat_id'>Eliminar</a></td>";
                $datos.="</tr>";
            }
        } else
            $datos.="<td>No hay datos</td>";


        $arreglo['datos'] = $datos;
        return $arreglo;
    }
    public function lista_categorias_mdl() {
        $datos = "";
        $query = $this->db->query('SELECT * FROM categorias');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $cat_id = $value->cat_id;
                $cat_nombre= $value->cat_nombre;
                $datos.="<input type='button' value='$cat_nombre' rel='categoria_menu' val='$cat_id'>";
            }
        } else
            $datos.="No hay datos";


        return $datos;
    }

    public function almacenar_categoria_mdl($arreglo) {
        $this->db->insert("categorias", $arreglo);
    }

    public function actualizar_categoria_mdl($id, $arreglo) {
        $this->db->where("cat_id", $id);
        $this->db->update("categorias", $arreglo);
    }

    public function datos_categoria_mdl($id) {
        $this->db->where("cat_id", $id);
        $query = $this->db->get("categorias");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function eliminar_categoria_mdl($id) {
        $this->db->where("cat_id", $id);
        $this->db->delete("categorias");
    }

    public function combo_categorias_mdl($cat_id = '') {
        $html = "<select name='cat_id' id='cat_id' class='form-control'><option value=''>Seleccione categoria</option>";
        $sql = "SELECT * FROM `categorias`";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                if ($cat_id == $data->cat_id)
                    $select = "selected";
                else
                    $select = "";
                $html.="<option value='$data->cat_id' $select>" . $data->cat_nombre. "</option>";
            }
        }
        return $html . "</select>";
    }

}

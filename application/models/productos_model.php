<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Productos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index_productos_mdl() {

        $datos = "";
        $query = $this->db->query('SELECT * FROM repuestos');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $rep_id = $value->rep_id;
                $datos.="<tr>";
                $datos.="<td>$value->rep_id</td>";
                $datos.="<td>$value->rep_nombre</td>";
                $datos.="<td>$value->rep_descripcion</td>";
                $datos.="<td>$value->rep_precio</td>";
                $datos.="<td><a class='btn btn-primary' href='" . base_url() . "productos/modificar_producto/$rep_id'>Modificar</a> | ";
                $datos.="<a class='btn btn-danger' href='" . base_url() . "productos/eliminar_producto/$rep_id'>Eliminar</a></td>";
                $datos.="</tr>";
            }
        } else
            $datos.="<td>No hay datos</td>";


        $arreglo['datos'] = $datos;
        return $arreglo;
    }
    public function lista_productos_mdl($cat_id) {
        $this->load->model('categorias_model');
        $data=$this->categorias_model->datos_categoria_mdl($cat_id);
        $categoria=$data['cat_nombre'];
        $datos = "<table>";
        $datos.="<tr> <td colspan='6' align='center'><b>$categoria</b></td></tr>";
        $datos.="<tr>";
        $datos.="<th width='3%'>ID</th>";
        $datos.="<th>Nombre</th>";
        $datos.="<th>Descripcion</th>";
        $datos.="<th>Precio</th>";
        $datos.="<th width='5%'>Cantidad</th>";
        $datos.="<th width='5%'>Opcion</th>";
        $datos.="</tr>";
        $query = $this->db->query("SELECT * FROM repuestos WHERE cat_id='$cat_id'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $rep_id = $value->rep_id;
                $datos.="<tr>";
                $datos.="<td>$value->rep_id</td>";
                $datos.="<td>$value->rep_nombre</td>";
                $datos.="<td>$value->rep_descripcion</td>";
                $datos.="<td>$value->rep_precio</td>";
                $datos.="<td><input type='text' size='10' id='unidad_$rep_id' ></td>";
                $datos.="<td><input type='button' rel='producto' value='Añadir' val='$rep_id'></td>";
                $datos.="</tr>";
            }
        } else
            $datos.="<td>No hay datos</td>";


        return $datos."</table>";
    }

    public function almacenar_producto_mdl($arreglo) {
        $this->db->insert("repuestos", $arreglo);
    }

    public function actualizar_producto_mdl($id, $arreglo) {
        $this->db->where("rep_id", $id);
        $this->db->update("repuestos", $arreglo);
    }

    public function datos_producto_mdl($id) {
        $this->db->where("rep_id", $id);
        $query = $this->db->get("repuestos");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function eliminar_producto_mdl($id) {
        $this->db->where("rep_id", $id);
        $this->db->delete("repuestos");
    }

}

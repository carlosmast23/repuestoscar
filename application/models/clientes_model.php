<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Clientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index_clientes_mdl() {
        $this->load->model("categorias_model");

        $datos = "";
        $query = $this->db->query('SELECT * FROM clientes order by cli_fecha');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $cli_id = $value->cli_id;
                $cat = $this->categorias_model->datos_categoria_mdl($value->cat_id);
                $nombrecat = $cat['cat_nombre'];
                $estado="";
                switch ($value->cli_estado) {
                    case '1': $estado="No Finalizado"; break;
                    case '2': $estado="Finalizado"; break;
                    case '3': $estado="Cancelado"; break;
                }

                $datos.="<tr>";
                $datos.="<td>$value->cli_id</td>";
                $datos.="<td>$value->cli_fecha</td>";
                $datos.="<td>$value->cli_nombres</td>";
                $datos.="<td>$value->cli_apellidos</td>";
                $datos.="<td>$value->cli_email</td>";
                $datos.="<td>$value->cli_telefono</td>";
                $datos.="<td>$value->cli_pedido</td>";
                $datos.="<td>$nombrecat</td>";
                $datos.="<td>$value->cli_presupuesto</td>";
                $datos.="<td>$estado</td>";
                $datos.="<td><a class='btn btn-primary' href='" . base_url() . "clientes/modificar_cliente/$cli_id'>Procesar</a>";
                $datos.="</tr>";
            }
        } else
        $datos.="<td>No hay datos</td>";


        $arreglo['datos'] = $datos;
        return $arreglo;
    }
    public function buscar_clientes_mdl($dato) {
        $this->load->model("categorias_model");

        $datos = "";
        $query = $this->db->query('SELECT * FROM clientes WHERE cli_estado='.$dato. ' order by cli_fecha');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $cli_id = $value->cli_id;
                $cat = $this->categorias_model->datos_categoria_mdl($value->cat_id);
                $nombrecat = $cat['cat_nombre'];
                $estado="";
                switch ($value->cli_estado) {
                    case '1': $estado="No Finalizado"; break;
                    case '2': $estado="Finalizado"; break;
                    case '3': $estado="Cancelado"; break;
                }

                $datos.="<tr>";
                $datos.="<td>$value->cli_id</td>";
                $datos.="<td>$value->cli_fecha</td>";
                $datos.="<td>$value->cli_nombres</td>";
                $datos.="<td>$value->cli_apellidos</td>";
                $datos.="<td>$value->cli_email</td>";
                $datos.="<td>$value->cli_telefono</td>";
                $datos.="<td>$value->cli_pedido</td>";
                $datos.="<td>$nombrecat</td>";
                $datos.="<td>$value->cli_presupuesto</td>";
                $datos.="<td>$estado</td>";
                $datos.="<td><a class='btn btn-primary' href='" . base_url() . "clientes/modificar_cliente/$cli_id'>Procesar</a>";
                $datos.="</tr>";
            }
        } else
        $datos.="<td>No hay datos</td>";


        $arreglo['datos'] = $datos;
        return $arreglo;
    }


    public function almacenar_cliente_mdl($arreglo) {
        $this->db->insert("clientes", $arreglo);
    }

    public function actualizar_cliente_mdl($id, $arreglo) {
        $this->db->where("cli_id", $id);
        $this->db->update("clientes", $arreglo);
    }

    public function datos_cliente_mdl($id) {
        $this->db->where("cli_id", $id);
        $query = $this->db->get("clientes");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }

    public function eliminar_cliente_mdl($id) {
        $this->db->where("cli_id", $id);
        $this->db->delete("clientes");
    }

    public function combo_clientes_mdl($cli_id = '') {
        $html = "<select name='cli_id' id='cli_id'><option value=''>Seleccione cliente</option>";
        $sql = "SELECT * FROM `clientes`";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                if ($cli_id == $data->cli_id)
                    $select = "selected";
                else
                    $select = "";
                $html.="<option value='$data->cli_id' $select>" . $data->cli_nombres." ".$data->cli_apellidos. "</option>";
            }
        }
        return $html . "</select>";
    }


    public function enviar_mail($id){
        $datos = $this->datos_cliente_mdl($id);

        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $datos['cli_email'];
        $subject = "Solicitud Hino";
        $message = "Hola ".$datos['cli_nombres'];
        $message .= "\n".$datos['cli_respuesta'];
        $message .= "\n"."Costo: ". $datos['cli_presupuesto'];
        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
           return true;
       } else {
        show_error($this->email->print_debugger());
        return  false;
    }
}
}

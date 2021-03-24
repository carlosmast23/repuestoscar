<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Usuarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function datos_usuario_mdl($id) {
        $this->db->where("usu_id", $id);
        $query = $this->db->get("usuarios");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
    }


}

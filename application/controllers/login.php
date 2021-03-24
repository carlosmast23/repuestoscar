<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Created by JetBrains PhpStorm.
 * User: isra
 * Date: 19/01/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        if ($this->session->userdata('is_logued_in') == 'a') {
            redirect(base_url() . 'admin');
        } else {
            $data['token'] = $this->token();
            $data['titulo'] = 'Login con roles de usuario en codeigniter';
            $this->load->view('login_view', $data);
        }
        
    }

    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function new_user() {
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|max_length[150]|xss_clean');

            //lanzamos mensajes de error si es que los hay
            $this->form_validation->set_message('required', 'El %s es requerido');
            $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
            $this->form_validation->set_message('max_length', 'El %s debe tener al menos %s carácteres');
            if ($this->form_validation->run() == FALSE) {
                $this->index();
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $this->login_model->login_user($username, $password);
                if ($user == TRUE) {
                    $data = array(
                        'is_logued_in' => $user->usu_tipo,
                        'id_usuario' => $user->usu_id,
                        'username' => $user->usu_nombres . " " . $user->usu_apellidos,
                        'email' => $user->usu_email
                        );
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
      
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        $this->index();
    }

}

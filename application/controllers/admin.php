<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('is_logued_in')!='a'){
				redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('head');
		$this->load->view('admin_view',$data);
		$this->load->view('foot');
	}
}

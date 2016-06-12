<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->helper('url');
	}

	public function index() {

		if($this->session->userdata('login'))
		{

			$email=$this->session->userdata('email');
			$this->load->model('usuario_model');
			$usuario = $this->usuario_model->getUser($email);
			foreach ($usuario->result() as $row) {
				$user = $row;
			}

			$data = array (
				'user' => $user
			);

			if($user->tipoUsuario == 'Admin')
			{
				$this->load->model('tipos_model');
				$data = array(
					'user' => $user,
					'nombre_tipo' => $this->tipos_model->ver(),
					'control' => FALSE
				);
				$this->load->view('header_admin',$data);
				$this->load->view('body_inicio');
			}
			else
			{
					if($user->tipoUsuario == 'Premium')
					{
						$this->load->view('header_premium',$data);
						$this->load->view('body_inicio');
					}
					else
					{
						if($user->tipoUsuario == 'Free')
						{
							$this->load->view('header_free',$data);
							$this->load->view('body_inicio');
						}

					}	
			}
		}
		
		else 
		{
			$this->load->view('header_visitante');
			$this->load->view('body_visitante');
		}
	}

	public function administrar_tipos() {
		$this->load->view('administar_tipos');
	}

	public function ver_couchs() {
		$this->load->model('couchs_model');
		$data = array(
			'couch' => $this->couchs_model->ver()
		);
		$this->load->view('couchs', $data);
	}

	//Hay que agregar el id_usuario como parámetro del iniciar_sesion.
	public function iniciar_sesion() {	
		//$tipo= $user->tipoUsuario;
		$this->load->view('inicio');

		}

	
	public function detalles($id_couch) {
		$this->load->model('couchs_model');
		$data = array(
			'couch' => $this->couchs_model->ver_detalles($id_couch),
			'preguntas' => $this->couchs_model->preguntas($id_couch),
			'respuestas' => $this->couchs_model->respuestas($id_couch)
		);
		$this->load->view('couchs_detalles', $data);
	}

	public function admin() {
		$this->load->view('admin');
	}

	public function premium($id_usuario) {
		if($this->session->userdata('login')) {
			$email=$this->session->userdata('email');
			$this->load->model('usuario_model');
			$usuario = $this->usuario_model->getUser($email);
			foreach ($usuario->result() as $row) {
				$user = $row;
			}
			if($user->tipoUsuario == 'Free') {				
				$this->load->model('tipos_model');
				$data = array(
					'user' => $user,
					'nombre_tipo' => $this->tipos_model->ver(),
					'control' => FALSE
				);
				$this->load->view('hpremium', $data);
				$this->load->view('premium', $data);
			}
		} else {
			$this->session->set_flashdata('accion', 'no premium');
	        redirect('http://localhost/couchinn/index.php/inicio', 'refresh');
		}
	}
	/**
	public function registrarse(){
		$this->load->view('formulario_registrarse');
	}
	**/
	
}
?>
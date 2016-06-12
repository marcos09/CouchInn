<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Couchs extends CI_Controller {

		public function index() {
			$this->load->model('couchs_model');
			$data = array(
				'couch' => $this->couchs_model->ver()
			);
			$this->load->view('couchs', $data);
		}

		public function ver() {
			$this->load->model('couchs_model');
			$data = array(
				'couch' => $this->couchs_model->ver()
			);
			$this->load->view('couchs', $data);
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


		public function agregar() {			
			

			$this->load->model('file');
			$file_name = $this->file->UploadImage('./images/', 'No es posible cargar la imagen. Inténtelo nuevamente');

			$this->load->model('couchs_model');

			/**
			$id_couch = $this->couchs_model->proximo_id();
			$id_couch = intval($id_couch); **/
			
			$idFoto = $this->couchs_model->agregar_foto($file_name, 4);

			$cantidad = $this->input->post('titulo', TRUE);
			if ($cantidad != FALSE) {

				$email=$this->session->userdata('email');
				$this->load->model('usuario_model');
				$usuario = $this->usuario_model->getUser($email);
				foreach ($usuario->result() as $row) {
					$user = $row;
				}
				
				$data = array(
					'titulo' 		=> trim($this->input->post('titulo', TRUE)),
					'descripcion' 	=> trim($this->input->post('descripcion', TRUE)),
					'idTipo' 		=> trim($this->input->post('idTipo', TRUE)),
					'capacidad' 	=> trim($this->input->post('capacidad', TRUE)),
					'direccion' 	=> trim($this->input->post('direccion', TRUE)),
					'idUsuario' 	=> $user->idUsuario, 
					'idFoto'		=> $idFoto
				);				

				$this->load->model('couchs_model');
				$consulta = $this->couchs_model->agregar($data);
				$idCouch = $this->db->insert_id();
				
				$this->couchs_model->actualizar_couch($idFoto, $idCouch);

				if ($consulta != FALSE) {
					$this->session->set_flashdata('accion', 'agregar bien');
	            	redirect('http://localhost/couchinn/index.php/couchs/publicar', 'refresh');
				} else {
					return FALSE;
				}
			} else {
				echo 'No es posible agregar el couch';
			}
		}

		public function publicar() {
		
			if($this->session->userdata('login'))
			{

				$email=$this->session->userdata('email');
				$this->load->model('usuario_model');
				$usuario = $this->usuario_model->getUser($email);
				foreach ($usuario->result() as $row) {
					$user = $row;
				}

				$this->load->model('couchs_model');
				$tipo = $this->couchs_model->tipos_disponibles();
				

				$data = array (
					'user' => $user,
					'tipos' => $tipo		
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
							$this->load->view('hpublicar_premium',$data);
							$this->load->view('publicar');
						}
						else
						{
							if($user->tipoUsuario == 'Free')
							{
								$this->load->view('hpublicar_free', $data);
								$this->load->view('publicar');
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

	/** **/


		/**
		public function guardar() {
			$data = array (
				'nombre' => $this->input->post('nombre', TRUE)
			);
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->agregar_tipo($data);
			$this->load->helper('form');
        	$this->load->helper('url');
        	if ($consulta = FALSE) {
        		redirect('administrar_tipos/mensaje_fallo');
        	} else {
        		redirect('administrar_tipos/mensaje_exito');	
        	}			
		}

		

		public function agregar() {
			$this->load->view('agregar_tipo');
		}

		public function mensaje_exito() {
			$this->load->view('agregar_exito');
		}

		public function mensaje_fallo() {
			$this->load->view('agregar_fallo');
		}

	**/
}

?>
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrar_tipos extends CI_Controller {

		/**
		public function index() {
			$this->load->view('administar_tipos');
		} **/

		public function __construct() {
			parent::__construct();
			$this->load->helper('form');
        	$this->load->helper('url');
		}

		public function index() {
			$this->load->model('tipos_model');
			$data = array(
				'nombre_tipo' => $this->tipos_model->ver(),
				'control' => FALSE
			);
			$this->load->view('admin', $data);
		}

		public function modificar($id_tipo) {
			$this->load->model('tipos_model');
			$cantidad = $this->input->post('nombre', TRUE);	
			if ($cantidad != FALSE) {	
				$nombre_tipo = $_POST['nombre'];
				$nombre_tipo = trim(strtoupper($nombre_tipo));
				if ($nombre_tipo == '') {
					$this->session->set_flashdata('accion', 'blanco');
	       		    redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
				} else if (preg_match('/[a-zA-Z0-9/ñ/Ñ]/', $nombre_tipo)) {
				 			$this->session->set_flashdata('accion', 'simbolo');
	            			redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
				}
				$consulta = $this->tipos_model->modificar($id_tipo, $nombre_tipo);
				if ($consulta != FALSE) {
					if ($consulta == 22) {
						$this->session->set_flashdata('accion', 'Error');
		            	redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
					} else {
						$this->session->set_flashdata('accion', 'Modificar bien');
		            	redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
					}
				} else {
					$this->session->set_flashdata('accion', 'Modificar mal');
		            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
				}
			} else {
				$this->session->set_flashdata('accion', 'no posible');
		        redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			}
		}


    	public function borrar($id_tipo) {
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->borrar($id_tipo);
			if ($consulta != FALSE) {
				if ($consulta == 22) {	
					$this->session->set_flashdata('accion', 'logica');
		            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
		        } else {
		        	$this->session->set_flashdata('accion', 'fisica');
		            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
		        }
			} else {
				$this->session->set_flashdata('accion', 'Borrar mal');
	            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			}


			/**
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->borrar($id_tipo);
			if ($consulta != FALSE) {
				$this->session->set_flashdata('accion', 'Borrar bien');
	            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			} else {
				$this->session->set_flashdata('accion', 'Borrar mal');
	            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			} **/
		}

		public function detalles($id_couch) {
			$this->load->model('couchs_model');
			$data = array(
				'couch' => $this->couchs_model->ver_detalles($id_couch)
			);
			$this->load->view('couchs_detalles', $data);
		}

		public function agregar() {
			$tipo = $_POST['nombre'];
			$tipo = strtoupper($tipo);
			$tipo = trim($tipo);
			if ($tipo == '') {
				$this->session->set_flashdata('accion', 'blanco');
	            redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			} else {
				 if (preg_match('/[a-zA-Z0-9/ñ/Ñ]/', $tipo)) {
				 	$this->session->set_flashdata('accion', 'simbolo');
	            	redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
				 } else {
					$this->load->model('tipos_model');
					/* $consulta = $this->tipos_model->agregar_tipo($data); */
					$consulta = $this->tipos_model->agregar_tipo($tipo);
					
		        	if ($consulta == FALSE) {
		        		/** $data = array(
							'nombre_tipo' => $this->tipos_model->ver(),
							'control' => 'error'
						);
		        		$this->load->view('admin', $data); **/
		        		$this->session->set_flashdata('accion', 'Error');
		                redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
		          	} else {
		        		$this->session->set_flashdata('accion', 'Bien');
		                redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');

		        		/** $data = array(
		        			'nombre_tipo' => $this->tipos_model->ver(),
							'control' => 'bien'
						);
		        		$this->load->view('admin', $data); **/
		        	}
	        }
		}
	}

		public function reincorporar($id_tipo) {
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->reincorporar($id_tipo);
			if ($consulta != FALSE) {
				$this->session->set_flashdata('accion', 'reincorporar');
                redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			} else {
				$this->session->set_flashdata('accion', 'reincorporar mal');
                redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
			}
		}

		public function guardar() {
			$data = array (
				'nombre' => $this->input->post('nombre', TRUE)
			);
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->agregar_tipo($data);
			$this->load->helper('form');
        	$this->load->helper('url');
        	if ($consulta == FALSE) {
        		?>
        		<!DOCTYPE html>
				<html>
				<body>
					<script>
						alert('¡Error! El Tipo de Couch que intenta agregar ya existe');
						window.location='http://localhost/couchinn/index.php/administrar_tipos/ver';
					</script>
				</body>
				</html>
        		<!-- redirect('http://localhost/couchinn/index.php/administrar_tipos/mensaje_fallo'); -->
        		<?php
        	} else {
        		?>
				<!DOCTYPE html>
				<html>
				<body>
					<script>
						alert('¡Bien! El nuevo Tipo de Couch fue agregado correctamente');
						window.location='http://localhost/couchinn/index.php/administrar_tipos/ver';
					</script>
				</body>
				</html>	
				<!-- redirect('http://localhost/couchinn/index.php/administrar_tipos/mensaje_exito'); -->
				<?php
        	}			
		}

		public function ver() {
			$this->load->model('tipos_model');
			$data = array(
				'nombre_tipo' => $this->tipos_model->ver()
			);
			$this->load->view('ver_tipos', $data);
		}

		/**
		public function mensaje_exito() {
			$this->load->view('agregar_exito');
		}

		public function mensaje_fallo() {
			$this->load->view('agregar_fallo');
		}
		**/

		/** function actualizar_datos() {         
               $id = $this->input->post('id_mensaje');
               $nombre = $this->input->post('nombre');
               $email = $this->input->post('email');
               $asunto = $this->input->post('asunto');
               $mensaje = $this->input->post('mensaje');
 
               $actualizar = $this->datos_model->actualizar_mensaje($id,$nombre,$email,$asunto,$mensaje);
               if($actualizar) {
                $this->session->set_flashdata('accion', 'Borrado');
                redirect('../datos', 'refresh');
               }
    	} **/

		/**
		public function borrar($id_tipo) {
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->borrar($id_tipo);
			if ($consulta) {
				$this->session->set_flashdata('accion', 'Borrado');
	        	redirect('http://localhost/couchinn/index.php/administrar_tipos', 'refresh');
	        }
		} **/

		/**
		public function administrar() {
			$this->load->model('tipos_model');
			$data = array(
				'nombre_tipo' => $this->tipos_model->ver(),
				'control' => FALSE
			);
			$this->load->view('admin', $data);
		}
		**/

		/**
		public function modificar($tipoViejo $tipoNuevo) {
			$data = array (
				'nombre' => $this->input->post('nombre', TRUE)
			);
			$this->load->model('tipos_model');
			$consulta = $this->tipos_model->modificar($data);
			if ($consulta == FALSE) {
        		?>
        		<!DOCTYPE html>
				<html>
				<body>
					<script>
						alert('¡Error! No es posible cambiar el nombre');
						window.location='http://localhost/couchinn/index.php/administrar_tipos';
					</script>
				</body>
				</html>
        		<!-- redirect('http://localhost/couchinn/index.php/administrar_tipos/mensaje_fallo'); -->
        		<?php
        	} else {
        		?>
				<!DOCTYPE html>
				<html>
				<body>
					<script>
						alert('¡Bien! El nombre del Tipo de Couch fue actualizado correctamente');
						window.location='http://localhost/couchinn/index.php/administrar_tipos';
					</script>
				</body>
				</html>	
				<!-- redirect('http://localhost/couchinn/index.php/administrar_tipos/mensaje_exito'); -->
				<?php
        	}			
		}
		}
		**/


}

?>
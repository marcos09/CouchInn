<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
   }
   public function index() {
      $email = $this->input->post('mail');
      $pass  = $this->input->post('passwd');
      $this -> load -> model('usuario_model');
      $result = $this->usuario_model->usuario_por_nombre_contrasena($email, $pass);
      if($result){
         $result=$this->usuario_model->getUser($email);
         $data = array(
               'email' => $email,
               'tipo' => $result,
               'login' => true
            );
            $this->session->set_userdata($data); 
            header('Location: inicio');
      }
      else{
         header('Location: inicio');
      }
   }
   public function iniciar_sesion() {
      $data = array();
      $this->load->view('inicio/iniciar_sesion', $data);

   }
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre = $this->input->post('nombre');
         $contrasena = $this->input->post('contrasena');
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->nombre,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('usuarios/logueado');
         } else {
            $this->session->set_flashdata('accion', 'mal datos');
            redirect('http://localhost/couchinn/index.php/inicio', 'refresh');
            /** redirect('index/inicio/'); **/
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function logueado() {
      if($this->session->userdata('logueado')){ 
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
         $this->load->view('index/inicio/iniciar_sesion', $data);
      }else{
         redirect('');
      }
   }
   public function cerrar_sesion() {
      $this->session->sess_destroy();

      header('Location: ../inicio');
   }
   private function validar_tarjeta($tarjeta) {
      $numero = $tarjeta % 5;
      if ($numero % 2 == 0) {
          return TRUE;
      } else {
         return FALSE;
      }
   }

   public function hacer_premium($id_usuario) {
      $tarjeta = $this->input->post('nroTarjeta', TRUE);
      if ($tarjeta != FALSE) {
         if (strlen($tarjeta) != 16) {
            $this->session->set_flashdata('accion', 'menos');
            $ruta = 'http://localhost/couchinn/index.php/inicio/premium/' . "$id_usuario";
            redirect($ruta, 'refresh');
         }
         if ($this->validar_tarjeta($tarjeta)) {
            $this->load->model('usuario_model');
            $actualizar = $this->usuario_model->hacer_premium($id_usuario, $tarjeta);
            if ($actualizar != FALSE) {
               $this->session->set_flashdata('accion', 'premium');
               redirect('http://localhost/couchinn/index.php/inicio', 'refresh');
            } 
         } else {
            $ruta = 'http://localhost/couchinn/index.php/inicio/premium/' . "$id_usuario";
            $this->session->set_flashdata('accion', 'tarjeta no');
            redirect($ruta, 'refresh');
         }
      } else {
         echo "No es posible realizar esa acción. No hay número de tarjeta.";
      }

   }

    public function modificar($id_usuario) {
      $this->load->model('usuario_model');
      $cantidad = $this->input->post('nombre', TRUE); 
      if ($cantidad != FALSE) {  
         $nombre = $_POST['nombre'];
         $nombre = trim(strtoupper($nombre));
         if ($nombre == '') {
            $this->session->set_flashdata('accion', 'blanco');
            redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
         } else if (preg_match('/[a-zA-Z0-9/ñ/Ñ]/', $nombre)) {
            $this->session->set_flashdata('accion', 'simbolo');
            redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
         }
         $consulta = $this->usuario_model->modificar($id_tipo, $nombre);
         if ($consulta != FALSE) {
            if ($consulta == 22) {
               $this->session->set_flashdata('accion', 'Error');
               redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
            } else {
               $this->session->set_flashdata('accion', 'Modificar bien');
               redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
            }
         } else {
            $this->session->set_flashdata('accion', 'Modificar mal');
            redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
         }
      }
      else {
         $this->session->set_flashdata('accion', 'no posible');
         redirect('http://localhost/couchinn/index.php/usuarios', 'refresh');
      }
   }

   public function recuperar($id_usuario){
     $email = $this->input->post('mail', TRUE);
      if ($email != FALSE) {
            $this->session->set_flashdata('accion', 'bien');
            redirect('http://localhost/couchinn/index.php/inicio', 'refresh');
      }  
   }

   public function ver_perfil($id_usuario) {
      $this->load->model('usuario_model');
      $data = array(
         'user' => $this->usuario_model->ver_perfil($id_usuario),
         );
      $this->load->view('ver_perfil', $data);
   }
   
   
}

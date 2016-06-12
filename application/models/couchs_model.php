<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Couchs_model extends CI_Model
{
	
	function __construct() {
		parent:: __construct();
	}

	function foto_publicacion($idUsuario) {
		$this->db->select(min(foto.idFoto));
		$this->db->where('couch.idUsuario', $idUsuario);
		$this->db->from('couch');
		$this->db->join('foto', 'couch.idCouch', 'foto.idCouch');
		$consulta = $this->db->get();
		if ($consulta->num_rows() == 0) {
			return FALSE;
		} else {
			return $consulta;
		}
	}

	function agregar_foto($file_name, $idCouch) {
		$sql = "INSERT INTO foto(idFoto, nombreFoto, idCouch) VALUES (null, '$file_name', $idCouch)";
		$consulta = $this->db->query($sql);
		if ($consulta != FALSE) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	function actualizar_couch($idFoto, $idCouch) {
		$sql = "UPDATE `foto` SET `idCouch` = $idCouch WHERE `idFoto` = $idFoto";
		$this->db->query($sql);
	}

	function proximo_id() {
		$sql = "SELECT `AUTO_INCREMENT` FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'couchinn' AND TABLE_NAME = 'couch'";
		return $this->db->query($sql)->result();
	}


	function ver() {
		$sql = "SELECT * FROM `couch` JOIN `foto` ON foto.idCouch = couch.idCouch JOIN `usuarios` ON couch.idUsuario = usuarios.idUsuario GROUP BY couch.idCouch";
		$consulta = $this->db->query($sql);
		$cantidad = $consulta->num_rows();
		if ($cantidad > 0) {
			return $consulta;
		} else {
			return FALSE;
		}		
		/**
		$consulta = $this->db->get('couch');
		$cantidad = $consulta->num_rows();
		if ($cantidad > 0) {
			return $consulta;
		} else {
			return FALSE;
		}
		**/
	}

	function agregar($data) {
		$consulta = $this->db->insert('couch', $data);
		if ($consulta != FALSE) {
			return $consulta;
		} else {
			return FALSE;
		}
	}

	function preguntas($id_couch) {
		$sql = "SELECT * FROM `couch` JOIN `pregunta` ON couch.idCouch = pregunta.couch JOIN `usuarios` ON pregunta.idUsuario = usuarios.idUsuario WHERE couch.idCouch = $id_couch ORDER BY pregunta.idPregunta";
		$consulta = $this->db->query($sql);
		$cantidad = $consulta->num_rows();
		if ($cantidad != 0) {
			return $consulta;
		} else {
			return FALSE;
		} 
	}

	function respuestas($id_couch) {
		$sql = "SELECT * FROM `respuesta` JOIN `pregunta` ON respuesta.idRespuesta = pregunta.respuesta JOIN `usuarios` ON respuesta.idUsuario = usuarios.idUsuario WHERE pregunta.couch = $id_couch ORDER BY pregunta.idPregunta";
		$consulta = $this->db->query($sql);
		$cantidad = $consulta->num_rows();
		if ($cantidad != 0) {
			return $consulta;
		} else {
			return FALSE;
		} 
	}

	function ver_detalles($id_couch) {
		$this->db->select('*');
		$this->db->where('couch.idCouch', $id_couch);
		$this->db->from('couch');
		$this->db->join('foto', 'couch.idCouch = foto.idCouch');
		$this->db->join('tipocouch', 'couch.idTipo = tipocouch.idTipo');
		/** $this->db->join('pregunta', 'couch.idCouch = pregunta.couch'); **/
		$this->db->order_by("foto.idFoto", "asce");
		$consulta = $this->db->get();
		$cantidad = $consulta->num_rows();
		if ($cantidad > 0) {
			return $consulta;
		} else {
			return FALSE;
		}
	}


	function tipos_disponibles() {
		$this->db->where('estado', 'Activo');
		$this->db->order_by("nombreTipo", "asce");
		$consulta = $this->db->get('tipocouch');
		if ($consulta->num_rows() != 0) {
			return $consulta;
		} else {
			return FALSE;
		}
	}

	/** function guardar_tipo($data) {
		$this->db->insert('tipocouch', $data);
	} 

	function agregar_tipo($tipo) {
   		$this->load->database('couchinn');
		$consulta = $this->db->get_where('tipocouch', array('nombre ='=> '$tipo'));
   		if($consulta->num_rows() > 0) {
   			return FALSE;
   		} else {
       		$this->db->insert('tipocouch', $tipo);
   			return $this->db->insert_id();   		}	  
	} **/

}
?>
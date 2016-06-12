<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipos_model extends CI_Model {
	
	function __construct() {
		parent:: __construct();
	}


	function ver() {
		$consulta = $this->db->order_by("nombreTipo","asce")->get('tipocouch');
		$cantidad = $consulta->num_rows();
		if ($cantidad > 0) {
			return $consulta;
		} else {
			return FALSE;
		}
	}

  public function ver_detalles($id_tipo) {
    $this->db->select('*');
    $this->db->where('idTipo', $id_tipo);
    $this->db->from('tipocouch');
    $consulta = $this->db->get();
    $cantidad = $consulta->num_rows();
    if ($cantidad > 0) {
      return $consulta;
    } else {
      return FALSE;
    }
  }

	function verificar($tipo){
       $sql = 'SELECT * FROM tipocouch WHERE nombreTipo = "$tipo"';
       $query = $this->db->query($sql, array($tipo));
       if($query->num_rows() == 0 ){
          return FALSE;
       }else{
          return $query;
     }
   }

  private function obtener_tipo($id_tipo){
    $this->db->where('idTipo', $id_tipo);
    $query = $this->db->get('tipocouch');
    $fila = $query->row();
    return $fila;
  }

  private function existe($id_tipo) {
    $sql = "SELECT * FROM `tipocouch` WHERE `idTipo` = $id_tipo";
    $consulta = $consulta = $this->db->query($sql);
    $cantidad = $consulta->num_rows();
    if ($cantidad == 0) {
      return FALSE;
    } else {
      $sql = "SELECT * FROM `tipocouch` WHERE `idTipo` = $id_tipo and `estado` = 'Inactivo'";
      $consulta = $consulta = $this->db->query($sql);
      $cantidad = $consulta->num_rows();
      if ($cantidad == 1) {
        return FALSE;
      } else {
        return TRUE;
      }
    }
  }

  public function reincorporar($id_tipo) {
    $sql = "SELECT * FROM `tipocouch` WHERE `idTipo` = $id_tipo and `estado` = 'Inactivo'";
    $consulta = $consulta = $this->db->query($sql);
    $cantidad = $consulta->num_rows();
    if ($cantidad != 0) {
      $sql = "UPDATE `tipocouch` SET `estado`= 'Activo' WHERE idTipo = $id_tipo";
      $consulta = $this->db->query($sql);
      return TRUE;
    } else {
      return FALSE;
    }
  }

  private function baja_logica($id_tipo) {
    $sql = "UPDATE `tipocouch` SET `estado`= 'Inactivo' WHERE idTipo = $id_tipo";
    $consulta = $this->db->query($sql);
    return TRUE;
  }

  private function baja_fisica($id_tipo) {
    $sql = "DELETE FROM `tipocouch` WHERE idTipo = $id_tipo";
    $this->db->query($sql);
    return TRUE;
  }

  public function borrar($id_tipo) {
    if ($this->existe($id_tipo)) {  
      $sql = "SELECT * FROM `couch` JOIN `tipocouch` ON tipocouch.idTipo = couch.idTipo WHERE tipocouch.idTipo = $id_tipo";
      $query = $this->db->query($sql);
      $cantidad = $query->num_rows();
      if ($cantidad == 0) {
        $this->baja_fisica($id_tipo);
        return 7;
      } else {
        $this->baja_logica($id_tipo);
        return 22;
      }
    } else {
      return FALSE;
    }
    /**
    if ($this->existe($id_tipo)) {  
      $sql = "UPDATE `tipocouch` SET `estado`= 'Inactivo' WHERE idTipo = $id_tipo";
      $consulta = $this->db->query($sql);
      return TRUE;
    } else {
      return FALSE;
    } **/

  }  


  /** 22 => ya existe tipo con ese nombre  
      7 => se puede modificar **/
  public function modificar($id_tipo, $nombre) {
    $sql = "SELECT * FROM `tipocouch` WHERE `idTipo` = $id_tipo and `nombreTipo` = '$nombre'";
    $consulta = $consulta = $this->db->query($sql);
    $cantidad = $consulta->num_rows();
    if ($cantidad == 1) {
      return FALSE;
    } else {
      $query = "SELECT idTipo FROM tipocouch WHERE '$nombre' = UPPER(nombreTipo)";
      $result = $this->db->query($query);
      $cant = $result->num_rows();
      if($cant == 1) {
        return 22;
      } else {
        $sql = "UPDATE `tipocouch` SET `nombreTipo` = '$nombre' WHERE `idTipo` = $id_tipo";
        $consulta = $this->db->query($sql);
        return 7;
      }          
    }
  }

	/** function guardar_tipo($data) {
		$this->db->insert('tipocouch', $data);
	} **/
  /** DELETE FROM `couchinn`.`tipocouch` WHERE `tipocouch`.`idTipo` = 42 **/

	function agregar_tipo($tipo) {
   		
      $query="SELECT idTipo FROM tipocouch WHERE '$tipo' = UPPER(nombreTipo)";

      if ( $result= $this->db->query($query)){
          $cant = $result->num_rows();
          if($cant == 1) {
            $query = "SELECT idTipo FROM tipocouch WHERE '$tipo' = UPPER(nombreTipo) and `estado` = 'Inactivo'";
            $consulta = $this->db->query($query);
            if ($consulta->num_rows() != 0) {
              $sql = "UPDATE `tipocouch` SET `estado`= 'Activo' WHERE '$tipo' = UPPER(nombreTipo)";
              $consulta = $this->db->query($sql);
              return TRUE;
            } else {
              return FALSE;
            }  
          }
          else {
            $agregar="INSERT INTO tipocouch (nombreTipo) VALUES ('$tipo')";
            if ( $result= $this->db->query($agregar)){
                return $result;
              }

          }
      }
      /**
      $sql = 'SELECT * FROM tipocouch WHERE UPPER("$tipo") = UPPER(nombre)';
      $consulta = $this->db->query($sql);
   		if ($consulta->num_rows() == 0) {
   			$this->db->insert('tipocouch', $tipo);
   			return $this->db->insert_id(); 
   		} else {
   			return FALSE;
   		} **/
		
		/**
   		if($consulta->num_rows() != 0) {
   			echo "El nombre del tipo ya existe";
   			return FALSE;
   		} else {
       		$this->db->insert('tipocouch', $tipo);
   			return $this->db->insert_id();   		
   		}	  
   		**/
	}
 
}

?>
<?php
class Usuario_model extends CI_Model { 
   public function usuario_por_nombre_contrasena($email, $contrasena){
      $this->db->select('idUsuario, nombre');
      $this->db->from('usuarios');
      $this->db->where('mail', $email);
      $this->db->where('passwd', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function getUser($email){
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('mail', $email);
      $consulta = $this->db->get();
      //$consulta = $this->db->row();
      return $consulta;
   }

   public function hacer_premium($id_usuario, $tarjeta) {
      $sql = "UPDATE `usuarios` SET `tipoUsuario`= 'Premium' WHERE idUsuario = $id_usuario";
      $consulta = $this->db->query($sql);
      return TRUE;
   }
   
   function ver_perfil($id_usuario) {
    $this->db->select('*');
    $this->db->where('usuarios.idUsuario', $id_usuario);
    $this->db->from('usuarios');
    $this->db->join('foto', 'usuarios.foto = foto.nombreFoto');
    //$this->db->order_by("foto.idFoto", "asce");
    $consulta = $this->db->get();
    $cantidad = $consulta->num_rows();
    if ($cantidad > 0) {
      return $consulta;
    } else {
      return FALSE;
    }
  }  

  public function modificar($id_usuario, $nombre) {
    $sql = "SELECT * FROM `usuarios` WHERE `idUsuario` = $id_usuario and `nombre` = '$nombre'";
    $consulta = $consulta = $this->db->query($sql);
    $cantidad = $consulta->num_rows();
    if ($cantidad == 1) {
      return FALSE;
    } else {
      $query = "SELECT idUsuario FROM usuarios WHERE '$nombre' = UPPER(nombre)";
      $result = $this->db->query($query);
      $cant = $result->num_rows();
      if($cant == 1) {
        return 22;
      } else {
        $sql = "UPDATE `usuarios` SET `nombre` = '$nombre' WHERE `idUsuario` = $id_usuario";
        $consulta = $this->db->query($sql);
        return 7;
      }          
    }
  }

   
}
?>

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
}
?>
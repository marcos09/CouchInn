<?php 
$accion = $this->session->flashdata('accion');
if ($accion == 'bien') {
  ?>
  <div class="alert alert alert-info" style ="margin-top: 50px">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Se ha enviado un mail a su correo con la contraseña.</strong> 
  </div>
  <?php
}
?> 

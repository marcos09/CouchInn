    
      <?php 
    $accion = $this->session->flashdata('accion');
    if ($accion == 'menos') {
      ?>
          <div class="alert alert alert-info" style ="margin-top: 50px">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Atención!</strong> Debes ingresar los <strong>16 dígitos</strong> de tu tarjeta de crédito.
          </div>
      <?php
    } else if ($accion == 'tarjeta no') {
      ?>
      <div class="alert alert alert-danger" style ="margin-top: 50px">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>¡Error!</strong> Tarjeta no válida. Intente con otro número.
      </div>
      <?php
    }
      ?>

    
    <div class="alert alert alert-warning">
      <div class="panel panel-default center" style="margin-top: 75px">
        <div class="panel-header">
          <p class="text-center"><strong>Hacerse Usuario Premium</strong></p>
        </div>
        <div class="panel-body" style="background-color: grey font-color: green">
          <ul>
            <li>
              <strong>¡Tus publicaciones tendrán una foto en el listado de couchs!</strong>
              <p>Esto resulta realmente ventajoso con respecto a los usuarios Free porque al pasar por todas las publicaciones <strong>tus publicaciones llamarán la atención de todos.</strong></p>
            </li>
            <li>
              <strong>¡Por sólo $50 tendrás más solicitudes de reserva!</strong>
              <p>Desde que está disponible la opción de ser Premium el 67% de los usuarios ya lo hicieron. <strong>¡Y sus couchs fueron los más solicitados!</strong></p>
            </li>
            <p class="text-left"><button class="btn btn-success" data-toggle="modal" href="#ingresar">Ingresar número</button></p>
            <p class="text-right">¿Qué estás esperando? <strong>Hacete Premium</strong></p>
            <p class="text-right">Sólo necesitas el número de tu tarjeta de crédito.</p>
            <p class="text-right">¿No la tenes a mano?<strong> ¡Anda a buscarla!</strong></p>
          </ul>
        </div>
      </div>

      <div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="Registrar usuario" id="myModalLabel">Ingresar número</h4>
            </div>
            <div class="modal-body">
              <?php
                $idUsuario = $user->idUsuario;
                $ruta = '../../usuarios/hacer_premium/' . "$idUsuario";              
              echo '<form style="padding: .5em" action="'.$ruta.'" name="iniciar_sesion" method="post">';
                ?>
                <div>               
                  <p style="text-align: center">
                    <label style="display: block; margin: .5em 0 0 0" >Número de Tarjeta:</label> 
                    <input type="number" name="nroTarjeta" id="nroTarjeta" maxlength="16" size="16" required /><br>
                    <span class="form_hint">Ingrese el número sin espacion ni guiones. Sólo numeros</span> <br>
                  </p>
                  <br>                
              </div> 
          </div>
          <div class="modal-footer">
            <button class="btn btn-success" type="submit">Aceptar</button>   
            <buttom class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
          </form>
        </div>

      </div>
      </div>
      

    </div>

<!-- FOOTER -->
<footer>
  <p align="center">Ingenieria de Software II - FI UNLP</p>
  <p class="pull-right"><a href="#">↑ Arriba</a></p>
  <p>&copy; 2016 Itt. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</div> <!-- /.container -->

<!-- jQuery -->
<script src="../dist/js/jquery.js"></script>

    <!-- Placed at the end of the document so the pages load faster
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
  </html>
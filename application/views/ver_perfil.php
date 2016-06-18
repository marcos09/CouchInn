<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>

	<!-- Bootstrap core CSS -->
	<link href="../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<script src="js/ie-emulation-modes-warning.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type='text/javascript' src="../validacion.js"></script>

	<link rel="stylesheet" type="text/css" href="../../../dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="../../../dist/css/lightbox.min.css">	
	
	<style type="text/css">
		body {
			padding-bottom: 50px;
			color: #5a5a5a;
			margin-right: 20px;
			margin-left: 20px;
		}
		.container{
			margin-left: 100px;
			margin-right: 100px;
		}
	</style>
	
</head>
<body>
	 <!--Agrega los mensajes de alerta correspondientes -->
   <?php $accion = $this->session->flashdata('accion');
 if ($accion == 'Bien') {
 ?>
 <div class="alert alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Bien!</strong> Se ha modificado el campo correctamente.
</div>      
<?php
} else {
  if ($accion == 'Error') {
    ?>
    <div class="alert alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Error!</strong> No pudo ser modificado.
    </div>
   <?php
  } else if ($accion == 'Modificar bien') {
    ?>
    <div class="alert alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Bien!</strong> Su perfil ha sido actualizado correctamente.
    </div> 
    <?php
  } else if ($accion == 'Modificar mal') {
    ?>
    <div class="alert alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Error!</strong> No ha podido ser modificado.
    </div>
    <?php
  }
    ?>
    <div class="alert alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Atención!</strong> Debe ingresar al menos un caracter.
    </div>
    <?php
  } else if ($accion == 'simbolo') {
    ?>
    <div class="alert alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Atención!</strong> No es posible ingresar símbolos.
    </div>
    <?php
  } else if ($accion == 'no posible') {
    ?>
    <div class="alert alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>¡Error!</strong> No es posible modificar.
    </div>
    <?php
  }
} 
<!-- Fin alertas -->

	<div class="container"  style="margin-top: 85px;">
		<?php
		if ($user != FALSE) {

			foreach ($user->result() as $row) {
				$anUser = $row;
			}

			echo '<div class="row row-centered" style="margin-top: 15px;">';
				echo '<div class="col-xs-4 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>';
					echo '<div class="thumbnail">';	
					//	echo "La foto es: ".$row->foto;		
						 if ($row->foto != NULL) {
							$idFoto = $row->foto;
							$ruta = '../../images/' . "$idFoto";
						}
						else {
							$ruta = '../../images/couchi.jpg';
						}   

						echo '<a class="pull-left" style="margin-left: 10px; margin-right: 10px">'; 
						echo '<img src= "'.$ruta.'" alt="imagen" class="media-object" width="150" height="200" style="margin-top: 10px"></a>';
						echo '<br />';

						echo '<div class="caption">';
							echo '<div class="col-sm-10"';
								echo "<tr>";
									echo '<p class="text-left"><td style="margin-left: 20px"><b>E-mail: </b>'.$row->mail.'</td></p>';
									echo '<p class="text-left"><td style="margin-left: 20px"><b>Nombre: </b>'.$row->nombre.'</td></p>';
			
									echo '<p class="text-left"><td style="margin-left: 20px"><b>Edad: </b>'.$row->edad.'</td></p>';
									echo '<p class="text-left"><td style="margin-left: 20px"><b>Telefono: </b>'.$row->telefono.'</td></p>';		
									echo '<p class="text-left"><td style="margin-left: 20px"><b>Contraseña: </b>'.$row->passwd.'</td></p>';
								echo "</tr>";				
							echo '</div>';
						echo '</div>';
			
						echo '<div class="caption">';	
							echo '<p class="text-right">'; 
								echo '<a href="http://localhost/couchinn/index.php/inicio" class="btn btn-default" role="button">Volver al inicio</a>';
								echo '<a style="margin-left: 5px" data-toggle="modal" href="#modificar" class="btn btn-success" type="button">Modificar datos</a>';
							echo '</p>';
						echo '</div>'; 
					echo '</div>'; 
				echo '</div>'; 
			echo '</div>';
		}
		?>
		<br>
      
                <div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <?php
				echo '<div class="modal-dialog" role="document">';
					echo '<div class="modal-content">';
						echo '<div class="modal-header">';
							echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
							echo '<h4 class="Modificar tipo" id="myModalLabel">Modificar datos del perfil</h4>';
						echo '</div>';
					echo '<div class="modal-body">';
			?>

					<form action="./usuarios/modificar"  method='post'>
						<?php
						echo '<div>'; 
							echo '<ul>';   

								echo '<label style="padding-right: .4em" for="name">E-mail actual:</label>';
									echo '<input size="35" type="text" placeholder="mail" name="" id="" value="'.mb_convert_case($row->mail, MB_CASE_TITLE, "utf8").'" disabled /><br>'; 
							
								echo '<br>';                                 
							
								echo '<label style="padding-right: .4em" for="name">Nombre actual:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nuevo nombre" name="" id="" value="'.mb_convert_case($row->nombre, MB_CASE_TITLE, "utf8").'" disabled /><br>'; 
								echo '<label style="padding-right: .2em" for="name">Nuevo nombre:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nuevo nombre" name="nombre" id="nombre" />';
									
								echo '<br>';echo '<br>';
								
								echo '<label style="padding-right: .4em" for="name">Edad actual:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nueva edad" name="" id="" value="'.mb_convert_case($row->edad, MB_CASE_TITLE, "utf8").'" disabled /><br>'; 
								echo '<label style="padding-right: .2em" for="name">Nueva edad:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nueva edad" name="nombre" id="nombre"  />';
									
								echo '<br>';echo '<br>';
									
								echo '<label style="padding-right: .4em" for="name">Telefono actual:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nuevo nombre" name="" id="" value="'.mb_convert_case($row->telefono, MB_CASE_TITLE, "utf8").'" disabled /><br>'; 
								echo '<label style="padding-right: .2em" for="name">Nuevo telefono:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nuevo telefono" name="nombre" id="nombre"  />';
									
								echo '<br>';echo '<br>';
									
								echo '<label style="padding-right: .4em" for="name">Contraseña actual:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nueva contraseña" name="" id="" value="'.mb_convert_case($row->passwd, MB_CASE_TITLE, "utf8").'" disabled /><br>'; 
								echo '<label style="padding-right: .2em" for="name">Nueva contraseña:</label>';
								echo '<input size="35" type="text" placeholder="Ingrese su nueva contraseña" name="nombre" id="nombre" />';

								echo '<br>';echo '<br>';

								echo "Agregar cambiar foto...";
							echo '</ul>';
							echo '<div class="modal-footer">';
								echo '<button href="" class="btn btn-success" type="submit" id="modificar">Aceptar</button>';
								echo '<buttom class="btn btn-default" data-dismiss="modal" style="margin-left: 5px">Cancelar</button>';
							echo '</div>';
						echo '</div>';
					echo '</form>';
				echo '</div>';			
				?>
			</div>

	</div> 
	<!-- container -->

	<hr class="featurette-divider" style="margin-top: 150px;">

	<!-- FOOTER -->
	<footer>
		<p align="center">Ingenieria de Software II - FI UNLP</p>
		<!--	<p class="pull-right"><a href="#">↑ Arriba</a></p>  -->
		<p>&copy; 2016 Itt. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</footer>

  <!-- jQuery -->
    <script src="../dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

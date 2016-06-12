<!DOCTYPE html>
<html>
<head>
	<title>Detalles</title>


  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>
  <!-- Custom CSS -->
  <link href="../dist/css/scrolling-nav.css" rel="stylesheet">

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
	 	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand page-scroll" href="../inicio"> <img src="../../../images/couchinn.png" class="img-responsive" alt="CouchInn" width="169" height="136"> </a>
	            </div>

	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav navbar-right">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="hidden">
	                        <a class="page-scroll" href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="http://localhost/couchinn/index.php/inicio#exper">Experiencias</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="http://localhost/couchinn/index.php/inicio#about">Sobre Nosotros</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="../../preguntas_frecuentes.php">Preguntas Frecuentes</a>
	                    </li>
	                    <li>
	                        <a class="active">Ver Couchs</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#">Ingresar</a>
	                    </li>
	                </ul>
	            </div>
	     	</div>
	     </nav>   		

		<div class="row row-centered" style="margin-top: 100px;">
		</div>

	<div class="container">
		<?php
		if ($couch != FALSE) {

				foreach ($couch->result() as $row) {
					$unCouch = $row;
				}


			echo '<div class="row row-centered" style="margin-top: 15px;">';
			echo '<div class="col-xs-4 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>';
			echo '<div class="thumbnail">';			
				
				echo '<div class="caption">';

					echo "<tr>";
					echo '<p class="text-left"><td style="margin-left: 20px"><b>Titulo: </b>'.$row->titulo.'</td></p>';
					echo '<p class="text-left"><td style="margin-left: 20px"><b>Tipo: </b>'.mb_convert_case($row->nombreTipo, MB_CASE_TITLE, "utf8").'</td></p>';
					echo '<p class="text-left"><td style="margin-left: 20px"><b>Descripción: </b>'.$row->descripcion.'</td></p>';
					echo '<p class="text-left"><td style="margin-left: 20px"><b>Capacidad: </b>'.$row->capacidad.'</td></p>';		
					echo '<p class="text-left"><td style="margin-left: 20px"><b>Lugar: </b>'.$row->direccion.'</td></p>';
					echo "</tr>";				
				echo '</div>';


				
				echo '<section>';
					echo '<div>';
						echo '<div class="row">';
							echo '<div class="col-md-offset-1 col-md-10">';
							foreach ($couch->result() as $value) {				
								$foto = $value->nombreFoto;
								$rutaFoto = '../../../images/' . "$foto";
								$titulo = $unCouch->titulo;			            		
								echo '<a class="col-sm-3" href="'.$rutaFoto.'" data-lightbox="example-set" data-title="'.$titulo.'" width="150" height="150"><img class="example-image" src="'.$rutaFoto.'" alt="" align="top" width="150" height="150" /></a>';
							}
							echo '</div>';	
						echo '</div>';	
					echo '</div>';
				echo '</section>';		  

				echo '<div class="caption">';	
					echo '<p class="text-right">'; 
						echo '<a href="http://localhost/couchinn/index.php/inicio/ver_couchs" class="btn btn-default" role="button">Volver</a>';
						

       						if($this->session->userdata('login')){
								echo '<a style="margin-left: 5px" href="#" class="btn btn-success" role="button">Reservar</a>';
						}           
						/** echo '<a style="display: none" style="margin-left: 5px" href="#" class="btn btn-success" role="button">Reservar</a>'; **/

					echo '</p>';
				echo '</div>'; 
				?>

					<hr class="featurette-divider">
				<?php
				if ($preguntas != FALSE) {
					if ($respuestas != FALSE) {
						foreach ($respuestas->result() as $value) {
							$respuesta[$value->pregunta] = $value;
						}
					}						
					if($preguntas != FALSE) {
						foreach ($preguntas->result() as $pregunta) {
							echo '<blockquote>';
								echo '<p style="font-size: 16px"><strong>'.$pregunta->textoPregunta.'</strong><cite style="font-size: 14px"> - '.$pregunta->nombre.'</cite></p>';
								if ($pregunta->respuesta != NULL) {
									$indice = $pregunta->idPregunta;
									echo '<p style="font-size: 16px">'.$respuesta[$indice]->textoRespuesta.'<cite style="font-size: 14px"> - '.$respuesta[$indice]->nombre.'</cite></p>';
								} else {
									echo '<button type="button" class="btn btn-link">'.'Responder'.'</button><br>';
								}
							echo '</blockquote>';

						}
					} else {
						echo "No hay preguntas y respuestas para mostrar";
					}
				} else {
					echo '<p style="font-size: 14px">No hay preguntas y respuestas para mostrar</p>';
				}	


			echo '</div>';	
			echo '</div>';
		
		} else {
		echo "El Couch que intenta ver no existe";
		}		
		?> 
	</div> <!-- container -->


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

	<script src="../../../dist/js/lightbox-plus-jquery.min.js"></script>

</body>
</html>
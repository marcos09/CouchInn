<!DOCTYPE html>
<html>
<head>
	
	<title>Ver couchs</title>

	<link rel="stylesheet" type="text/css" href="../../dist/css/bootstrap.min.css">

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
	                <a class="navbar-brand page-scroll" href="../inicio"> <img src="../../images/couchinn.png" class="img-responsive" alt="CouchInn" width="169" height="136"> </a>
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
			<!--  -->
		     <?php
				if ($couch != FALSE) {
					foreach ($couch->result() as $row) {
						if ($row->estado != 'Despublicado') {	
							echo '<div class="row row-centered" style="margin-top: 15px;">';
								/** echo '<div class="col-xs-15 col-md-9">'; **/
								 echo '<div class="col-xs-4 col-centered col-fixed"><div class="item"><div class="content"></div></div></div>';
								   	echo '<div class="thumbnail">';
									   	if ($row->tipoUsuario == 'Premium') {
										   	$idFoto = $row->nombreFoto;
										   	$ruta = '../../images/' . "$idFoto";
										} else {
											$ruta = '../../images/couchi.jpg';
										}
									    echo '<a class="pull-left" style="margin-left: 10px; margin-right: 10px">'; echo '<img src= "'.$ruta.'" alt="CouchInn" class="media-object" width="150" height="200" style="margin-top: 10px"></a>';
										echo '<br />';
										/** echo '<div class="col-sm-3">'; **/
							      		echo '<div class="caption">';
											echo '<div class="col-sm-10"';
											echo '<tr>';
												echo '<p class="text-left"><td style="margin-left: 20px"><b>Titulo: </b>'.$row->titulo.'</td></p>';
												echo '<p class="text-left"><td style="margin-left: 20px"><b>Lugar: </b>'.$row->direccion.'</td></p>';
												echo '<p class="text-left"><td style="margin-left: 20px"><b>Capacidad: </b>'.$row->capacidad.'</td></p>';		
											echo "</tr>";
											echo '</div>';
										$idCouch = $row->idCouch;
										$parametro = './detalles/' . "$idCouch";
										echo '<p class="text-right">'; echo '<a href="'.$parametro.'" class="btn btn-success" role="button">Ver Detalles</a></p>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					}
				} else {
					echo "No hay Couchs para mostrar";
				}
			?> 
		 </div> 
		 <!-- container -->

<!-- FOOTER -->
<footer>
  <p align="center">Ingenieria de Software II - FI UNLP</p>
  <p class="pull-right"><a href="#"> Arriba</a></p>
  <p>&copy; 2016 Itt. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</body>
</html>
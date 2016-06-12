<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administar Tipos</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
</head>
<body>
	
	<div class="container" style="margin-left: 90px; margin-top: 10px">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link" href="../administrar_tipos">Administrar Tipos</a>
			  </li>
			  <li class="active">
			    <a href="#">Agregar Tipo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Modificar Tipo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Borrar Tipo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../administrar_tipos/ver">Ver Tipos</a>
			  </li>
			</ul>
	</div>

	

	<div class="alert alert alert-danger">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>¡Error!</strong> El tipo de couch que intenta agregar ya existe.
	</div>


	<div class="panel panel-default center" style="margin-top: 25px">
		<div class="panel-heading center">
			<div class="row">
				<div class="col-md-10 col-md-offset-5">			
					<h4>Agregar Tipo de Hospedaje</h4>
				</div>
			</div>
		</div>
		<form name="agregar_tipo" action="http://localhost/couchinn/index.php/administrar_tipos/guardar" method="POST">
		<div> 
			<div class="panel-body">
				<div class="row">
				 	<div class="col-md-10 col-md-offset-5">	
				 		<label for="nombre">Tipo:</label> 
				 		<input type="text" placeholder="Nuevo tipo" name="nombre" id="nombre" required /> 
					 	<br>
				 	 	<button class="btn btn-primary" type="submit">Agregar Tipo</button>
				  		<a href="../administrar_tipos"><buttom class="btn btn-default">Cancelar</button></a> 
					</div>
				</div>
			</div>		
		</div>
		</form>
	</div>

	<script src="/js/jquery.ja"></script>
	<script src="js/bootstrap.min.js"></script>



</body>
</html>
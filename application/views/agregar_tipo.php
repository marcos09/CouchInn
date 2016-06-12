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
	
	<style type="text/css">

		.row{
			max-width: 1500px;
			width: 1000px;
			min-width: 800px
		}

		.botones-tipo{
			margin-left: 10px;
		}

		.botones{
			margin-left: 25px;
		}

	</style>

</head>
<body>
	
	<div class="container" style="margin-left: 90px; margin-top: 15px">
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

	<!-- <div class="container center" style="margin-top: 10px"> -->
	<div class="panel panel-default center" style="margin-top: 30px">
		<div class="panel-heading center">
			<div class="row">
				<div id="agr" class="col-md-10 col-md-offset-5">			
					<h4>Agregar nuevo tipo de hospedaje</h4>
				</div>
			</div>
		</div>
		<form name="agregar_tipo" action="http://localhost/couchinn/index.php/administrar_tipos/guardar" method="POST">
			<div> 
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-5">	
							<br>
							<div class="botones-tipo">
								<label for="nombre">Tipo:</label> 
								<input type="  text" placeholder=" Nuevo tipo" name="nombre" id="nombre" required /> 

								<br><br>
								<div class="botones">
									<button class="btn btn-success" type="submit">Agregar tipo</button>
									<a href="../administrar_tipos"><buttom class="btn btn-default">Cancelar</button></a> 
								</div>
							</div>
						</div>
					</div>
				</div>		
				<br>
			</div>
		</form>
	</div>

	<script src="/js/jquery.ja"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
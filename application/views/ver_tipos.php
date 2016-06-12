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
			max-width: 1300px;
			width: 1000px;
			min-width: 800px
		}

		.tipos{
				margin-left: 55px;
		}
	</style>
	</head>
<body>
	
	<div class="container" style="margin-left: 90px; margin-top: 15px">
			<ul class="nav nav-tabs">
			  <li class="nav-item">
			    <a class="nav-link" href="../administrar_tipos">Administrar Tipos</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../administrar_tipos/agregar">Agregar Tipo</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Modificar Tipos</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Borrar Tipo</a>
			  </li>
			  <li class="active">
			    <a href="#">Ver Tipos</a>
			  </li>
			</ul>

		<div class="panel panel-default center" style="margin-top: 30px">
			<div class="panel-heading center">
				<div class="row">
					<div class="col-md-10 col-md-offset-5">			
						<h4>Tipos de Hospedajes</h4>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
				 	<div class="col-md-10 col-md-offset-5">
				 	<div class="tipos">
						<?php 
							if ($nombre_tipo != FALSE) {
								foreach ($nombre_tipo->result() as $row) {
									if($row->estado != "Inactivo"){
										echo "<tr>";
											echo "<td>".$row->nombre."</td>";
											echo "<br />";
										echo "</tr>";
									}
								}
							} else {
								echo "No hay tipos de hospedaje para mostrar";
							}
						?> 		
					</div>
					</div>
				</div>
			</div>
		</div>
 	</div>	

	<script src="/js/jquery.ja"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
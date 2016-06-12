<!DOCTYPE html>
<html>
<head>
		<title>Registrar usuario</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../dist/css/bootstrap.min.css">

</head>

<body>
	


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
						<form name="registrar_usuario" method="post"action="agregar_usuario.php" >
		<!--form class="contact_form" action="#" id="contact_form" runat="server"--> 
		<div> 
			<ul>
				<li> 
					<h2>Registrar usuario</h2> 
					<span class="required_notification">* Datos requeridos</span> 
				</li> 
				<li> 
					<label for="name">Nombre:</label> 
					<input type="text" placeholder="Angélica Lopez" name="name" required /> 
				</li>
				<li> 
					<label for="email">Email:</label> 
					<input type="email" name="email" placeholder="usuario@ejemplo.com" required /> 
					<span class="form_hint">Formato correcto: "name@something.com"</span> 
				</li> 

				<li> 
					<label for="contraseña">Contraseña:</label>
					<input type="password" name="contraseña" required /> 
				</li> 
				<li> 
					<label for="contraseña2">Repetir contraseña:</label>
					<input type="password" name="contraseña2" required /> 
				</li> 

				<li> 
					<label for="telefono">Telefono:</label>
					<input type="number" name="telefono" placeholder=02214534394 /> 
					<span class="form_hint">No se aceptan espacios ni guiones. Solamente números</span>
				</li> 
				<li> 
					<label for="edad">Edad:</label>
					<input type="number" name="edad" placeholder= 20 /> 
				</li> 
				<li> 
					<label for="fecha_nacimiento">Edad:</label>
					<input type="date" name="fecha_nacimiento" placeholder="25/02/1974" required /> 
					<span class="form_hint">Formato correcto: "dd/mm/aaaa"</span>
				</li> 
				<div class="form-group">
					<label for="exampleInputFile">File input</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Example block-level help text here.</p>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Check me out
					</label>
				</div>

				<br>
				<li> 
					<button class="btn btn-primary" type="submit">Registrar usuario</button> 
				</li>
				<buttom class="btn btn-primary" href="index.html">Salir</button>
				</ul> 
			</form>
		</div> 
	</form> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				</div>
				</div>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</body>
</html>
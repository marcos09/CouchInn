<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Couchinn</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>

		function lleno(q) {
        for ( i = 0; i < q.length; i++ ) {
                if ( q.charAt(i) != " " ) {
                        return true
                }
        }
        return false
}
		function validarSiNumero(numero){
    		if (!/^([0-9])*$/.test(numero)){
    			return false;
    		}
    		return true;
  		}
  		function validarEmail( email ) {
  			expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    		if ( !expr.test(email) ){
        		alert("Error: La dirección de correo  es incorrecta.");
        		return false;
    		}
    		return true;
		}
		function validar2(){
						var email =document.forms.iniciar_sesion.email.value;
						return validarEmail(email);
		}

		function validar(){
	        var passwd =document.forms.registrar_usuario.pass.value;
			var passwd2 =document.forms.registrar_usuario.pass2.value;
			var email =document.forms.registrar_usuario.email.value;
			var edad =parseInt(document.forms.registrar_usuario.edad.value);
			var nombre= document.forms.registrar_usuario.name.value;
			//var f_nac=document.registrar_usuario.fecha_nacimiento;
			

			if(nombre.length <3){
				alert("Los nombres deben tener al menos 3 caracteres.");
				return false
			}
			if(!lleno(nombre)){
				alert("El nombre no puede ser vacio")
				return false;
			}
			if(!validarEmail(email)){
				return false;
			}
			if(passwd.length<6){
				alert("Las contraseñas deben tener al menos 6 caracteres");
				return false;
			}
			if(passwd2.value != passwd.value){
				alert("Las contraaseñas no coinciden");
				return false;
			}

			if(edad<18){
				alert("Debe tener al menos 18 años para registrarse en Couchinn");
				return false;
			}
			if(edad>120){
				alert("¿¿Enserio eres tan viejo??....A mi no me engañas. No existe nadie que tenga "+ edad +" años");
				return false;
			}
			return true;

		}		


	</script>
</head>
<body>
</head> 
<body> 
	<header>
		<div class="container">
			<h1>Couchinn: <small>Una nueva forma de viajar</small></h1>
		</div>
	</header>

	<br>

	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" href="#myModal">Registrarse</button>
	<br>
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" href="#iniciar">Iniciar sesión</button>
	
	<div class="modal fade" id="iniciar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="Registrar usuario" id="myModalLabel">Iniciar sesión</h4>
				</div>
				<div class="modal-body">
					<form action="iniciar_sesion.php" name="iniciar_sesion" method="post" onsubmit= "return validar2();">
					<div> 
							<ul>
								<li> 
									<label for="email">Email:</label> 
									<input type="email" name="mail" id="email" placeholder="usuario@ejemplo.com" required /> 
									<span class="help-block">nombre@ejemplo.com</span>
								</li> 

								<li> 
									<label for="contraseña">Contraseña:</label>
									<input type="password" name="passwd" required /> 
									<span class="help-block">Debe ingresar una contraseña</span>
								</li> 					
								<button class="btn btn-primary" type="submit">Iniciar sesión</button>	
							</ul> 
						</div> 
					</form>
				</div>
				<div class="modal-footer">
					<buttom class="btn btn-primary" href="index.php" data-dismiss="modal">Cancelar</button>
					</div>
				</div>

			</div>
		</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="Registrar usuario" id="myModalLabel">Registrarse</h4>
						</div>
						<div class="modal-body">
							<form action="agregar_usuario.php" name="registrar_usuario" method="post" onsubmit="return validar();">
								<div> 
									<ul>
										<li> 
											<label for="name">Nombre:</label> 
											<input type="text" placeholder="Angélica Lopez" name="name" id="name" required /> 
											
										</li>
										<li> 
											<label for="email">Email:</label> 
											<input type="email" name="email" placeholder="usuario@ejemplo.com" id="email" required /> 
											<p class="help-block">nombre@ejemplo.com</p>
										</li> 

										<li> 
											<label for="contraseña">Contraseña:</label>
											<input type="password" name="contraseña" id="pass" required /> 
										</li> 
										<li> 
											<label for="contraseña2">Repetir contraseña:</label>
											<input type="password" name="contraseña2" id="pass2" required /> 
										</li> 

										<li> 
											<label for="telefono">Telefono:</label>
											<input type="number" name="telefono" placeholder=02214534394 id="phone" /> 
											<span class="form_hint">No se aceptan espacios ni guiones. Solamente números</span>
										</li> 
										<li> 
											<label for="edad">Edad:</label>
											<input type="number" name="edad" placeholder= 20 id="edad" /> 
										</li> 
										<div class="form-group">
											<label for="exampleInputFile">Foto de Perfil</label>
											<input type="file" id="exampleInputFile" accept=".jpg">
											<p class="help-block">Solamente se aceptan imagenes jpg.</p>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" required> Declaro ser mayor de 18 años y haber leido y aceptado los terminos y condiciones del servicio
											</label>
										</div>

										<br>
											<button class="btn btn-primary" type="submit" id="registrarse">Registrar usuario</button> 
										<buttom class="btn btn-primary" href="index.html">Salir</button>
										</ul> 
									</form>
								</div> 
							</form> 
						</div>
					</div>
				</div>
			</div>
		</body> 
		</html>
	</body>
	</html>
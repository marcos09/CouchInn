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
		function validarNombre(){
			var nombre =document.forms.agregar_tipo.tipo.value;
			return lleno(nombre);
		}
		function validarNombreTipo(){
			var nombre =document.forms.borrar_tipo.tipo.value;
			return lleno(nombre);
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
				alert("El nombre no puede estar en blanco")
				return false;
			}
			if(!validarEmail(email)){
				return false;
			}
			if(passwd.length<6){
				alert("Las contraseñas deben tener al menos 6 caracteres");
				return false;
			}
			if(passwd2 != passwd){
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

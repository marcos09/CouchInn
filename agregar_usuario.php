<?php
	$link = mysqli_connect("localhost","root","","couchinn");
	if (!$link){
		echo 'Error al conectar';}
	else{
	
			$name = $_POST['name'];
			$age = $_POST['edad'];
			$passwd = $_POST['contraseña'];
			$rPass = $_POST['contraseña2'];
			$phone = $_POST['telefono'];
			$email = $_POST['email'];
			if($passwd != $rPass){
				echo "Las contraseñas no coinciden";
			}

			$query= "SELECT * FROM usuarios where '$email' = mail";

			if($result = mysqli_query($link,$query)){
				$cant = mysqli_num_rows ($result);
				if($cant == 1){
					?>
					<!DOCTYPE html>
					<html>
					<head>
						<title></title>
						<script>
							alert("El mail ingresado ya se encuentra registrado.");
						</script>
					</head>
					<body>
						<script>
							alert("El mail ingresado ya se encuentra registrado.");
						</script>

					</body>
					</html>
			<?php 
					header('Location: index.php/inicio');
				}
				else{
					$result= mysqli_query($link,"INSERT INTO usuarios (mail, edad, nombre, passwd, telefono) VALUES ('$email',$age,'$name','$passwd',$phone)");
					if(mysqli_error($link) == 0){
						?>
					<!DOCTYPE html>
					<html>
					<head>
						<title></title>
					</head>
					<body>
						<script>
							alert("Se agregó el usuario correctamente.");
						</script>
					</body>
					</html>
			<?php 
			header('Location: index.php/inicio');

					}
					

									}
			}

	}

	mysqli_close($link);
?>
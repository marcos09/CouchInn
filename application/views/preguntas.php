<!DOCTYPE html>
<head>
	<title>Preguntas y Respuestas</title>
	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap.min.css">
</head>
<body>
		<?php
			if ($preguntas != FALSE) {
				foreach ($respuestas->result() as $value) {
					$respuesta[$value->pregunta] = $value;
				}
				if($preguntas != FALSE) {
					foreach ($preguntas->result() as $pregunta) {
						echo '<blockquote>';						
							echo '<strong style="color: green">'.$pregunta->nombre.': </strong>';						
							echo '<strong>'.$pregunta->textoPregunta.'</strong><br>';
							if ($pregunta->respuesta != NULL) {
								$indice = $pregunta->idPregunta;
								echo '<strong style="color: orange">'.$respuesta[$indice]->nombre.': </strong>';
								echo $respuesta[$indice]->textoRespuesta.'<br><br>';

							} else {
								echo "No hay respuesta<br>";
								echo '<button type="button" class="btn btn-link">'.'Responder'.'</button><br>';							
							}
						echo '</blockquote>';

					}
				} else {
					echo "No hay preguntas y respuestas para mostrar";
				}
			} else {
				echo 'No hay preguntas y respuestas para mostrar';
			}	
				

		?>
</body>
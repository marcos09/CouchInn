
		<br><br><br>

	<?php
    $accion = $this->session->flashdata('accion');
    if ($accion == 'agregar bien') {
          ?>
          <div class="alert alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>¡Bien!</strong> Tu couch fue publicado exitosamente.
          </div>
          <?php
    } 
    ?>

	<div class="container" centered-block>
		<!-- <h1>Publicación de un Couch</h1> -->
		<form action="../couchs/agregar" method="post" enctype="multipart/form-data">
			<br>
			<fieldset style="padding-left: 10em">
				
				<legend>Publicar un Couch</legend>
				<b><label>Título: </label></b><br>
				<input type="text" name="titulo" id="titulo" style="width: 650px" required /><br />

				<b><label>Descripción: </label></b><br>
				<textarea rows="5" cols="100" wrap="soft" required placeholder="Escribe una descripción del couch. ¡Prueba con indicar las comodidades y ventajas de elegirlo!" name="descripcion" id="descripcion"></textarea><br>
				
				<b><label>Tipo de Hospedaje: </label></b>
				<select name="idTipo" id="idTipo" required />
					<!-- <option>Seleccionar</option> -->
					<?php
					foreach ($tipos->result_array() as $row) {
					   echo '<option value="'.$row['idTipo'].'" required>'.$row['nombreTipo'].'</option>';
					}
					?>
				</select><br>

				<b><label>Capacidad: </label></b><br>
				<input type="number" name="capacidad" id="capacidad" required /><br />

				<span class="glyphicon glyphicon-road" aria-hidden="true"></span>
				<b><label>Dirección: </label></b><br>
				<input type="text" name="direccion" id="direccion" required /><br />

				<span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
				<b><label>Fotos:</label></b><br>
				<input type="file" name="img" required />
				<span class="form_hint">Al menos debe seleccionar una foto.</span> <br>



				<p class="text-right">
					<button class="btn btn-success" type="submit">Publicar Couch</button>
				</p>	
					
			</fieldset>

		</form>

	</div>

</body>
</html>
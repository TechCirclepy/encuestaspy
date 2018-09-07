{!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
	{{Form::token()}}
		@if ($tipo_encuesta == 'dinamica')
			<div class="contenedor">
				<div class="form-group">
			    	<label for="titulo">Nombre de la encuesta</label>
			    	<input type="name" class="form-control" name="titulo" id="titulo" required>
			  	</div>
			  	<div class="form-group">
			    	<label for="fecha_finalizacion">Fecha de finalizacion</label>
			    	<input type="datetime-local" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required>
			  	</div>
			  	<div class="form-group">
				  	<label for="">Estado de la encuesta</label>
				  	<br>
				   	<label class="checkbox-inline"><input type="radio" checked name="estado" value="1">Activo</label>
					<label class="checkbox-inline"><input type="radio" name="estado" value="0">Inactivo</label>
			  	</div>
			  	<div class="form-group">
					<label for="foto">Portada</label><br>
					<input id="foto" type="file" name="foto" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<label for="foto">
						<img id="portada" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="subtitulo">Pregunta</label>
					<input type="text" id="subtitulo" name="subtitulo" class="form-control">
				</div>
				<div class="form-inline">
					<label for="opcion1">posible respuesta 1</label><br>
					<label for="imagen1">
						<img id="imgSalida" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25"/>
					</label>
					<input type="text" name="opcion1" id="opcion1" class="form-control">
					<input name="imagen1" id="imagen1" type="file" style="display: none;" />
				</div>
				<div class="form-group">
					<input type="text" name="tipo_encuesta" value="<?php echo $tipo_encuesta; ?>" class="form-control" style="display: none;">
				</div>
			</div>
			<script>
				var e = 1;
			</script>
			<div class="form-group text-center">
				<a class="btn btn-warning" onclick="addPregunta(e), addImagen(e)" id="abrir">+</a>
					
				<a class="btn btn-default" id="ocultar">-</a>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Agregar" class="btn btn-success pull-right">
				<a href="{{ url('/crear-encuesta') }}"> Regresar</a>
			</div>

		@else
			<div class="contenedor">
				<div class="form-group">
			    	<label for="titulo">Titulo de la pregunta</label>
			    	<input type="name" class="form-control" name="titulo" id="titulo" required>
			  	</div>
			  	<div class="form-group">
			    	<label for="fecha_finalizacion">Fecha de finalizacion</label>
			    	<input type="datetime-local" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required>
			  	</div>
			  	<div class="form-group">
						<label for="foto">Portada</label><br>
						<input id="foto" type="file" name="foto" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
						<label for="foto">
							<img id="portada" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" class="img-responsive" alt="" style="width: 100px;"/>
						</label>
					</div>
			  	<div class="form-group">
				  	<label for="">Estado de la encuesta</label>
				  	<br>
				   	<label class="checkbox-inline"><input type="radio" checked name="estado" value="1">Activo</label>
					<label class="checkbox-inline"><input type="radio" name="estado" value="0">Inactivo</label>
			  	</div>
			  	<div class="form-inline">
					<label for="opcion1">Pregunta</label><br>
					<label for="imagen1">
						<img id="imgSalida" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25"/>
					</label>
					<input type="text" name="opcion1" id="opcion1" class="form-control" placeholder="Pregunta"  required/>
					<input name="imagen1" id="imagen1" type="file" style="display: none;" />
				</div>
				<div class="form-group">
					<input type="text" name="tipo_encuesta" value="<?php echo $tipo_encuesta; ?>" class="form-control" style="display: none;">
				</div>
			</div>
			<script>
				var e = 1;
			</script>
			<div class="form-group text-center">
				<a class="btn btn-warning" onclick="addPregunta(e), addImagen(e)" id="abrir">+</a>
					
				<a class="btn btn-default" id="ocultar">-</a>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Agregar" class="btn btn-success pull-right">
				<a href="{{ url('/crear-encuesta') }}"> Regresar</a>
			</div>
		@endif
{!! Form::close() !!}
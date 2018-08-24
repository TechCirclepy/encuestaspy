{!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
	{{Form::token()}}
	<div class="contenedor">
		<div class="form-group">
	    	<label for="titulo">Titulo de la pregunta</label>
	    	<input type="name" class="form-control" name="titulo" id="titulo" required>
	  	</div>
	  	<div class="form-group">
	    	<label for="fecha_finalizacion">Fecha de finalizacion</label>
	    	<input type="date" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required>
	  	</div>
	  	<div class="form-group">
		  	<label for="">Estado de la encuesta</label>
		  	<br>
		   	<label class="checkbox-inline"><input type="radio" name="estado" value="1">Activo</label>
			<label class="checkbox-inline"><input type="radio" name="estado" value="0">Inactivo</label>
	  	</div>
	  	<div class="form-inline">
			<label for="opcion1">Opcion o respuesta</label><br>
			<label for="imagen1">
				<img id="imgSalida" src="https://openclipart.org/image/2400px/svg_to_png/190958/1392495957.png" width="25" height="25"/>
			</label>
			<input type="text" name="opcion1" id="opcion1" class="form-control" placeholder="Respuesta"  required/>
			<input name="imagen1" id="imagen1" type="file" style="display: none;" />
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
{!! Form::close() !!}
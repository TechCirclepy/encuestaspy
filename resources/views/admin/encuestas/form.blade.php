{!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
	{{Form::token()}}
	<div class="form-group">
    	<label for="titulo">Titulo de la pregunta</label>
    	<input type="name" class="form-control" name="titulo" id="titulo" required>
  	</div>
  	<div class="form-group">
    	<label for="fecha_finalizacion">Fecha de finalizacion</label>
    	<input type="date" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required>
  	</div>
  	<div class="form-group">
		<br /><label for="opcion_1">Opcion o respuesta</label>
		<input type="text" name="opcion_1" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group">
		<br /><label for="opcion_1">Opcion o respuesta 2</label>
		<input type="text" name="opcion_2" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto">
		<br /><label for="opcion_3">Opcion o respuesta 3</label>
		<input type="text" name="opcion_3" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto4" >
		<br /><label for="opcion_4">Opcion o respuesta 4</label>
		<input type="text" name="opcion_4" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto5" >
		<br /><label for="opcion_5">Opcion o respuesta 5</label>
		<input type="text" name="opcion_5" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto6" >
		<br /><label for="opcion_6">Opcion o respuesta 6</label>
		<input type="text" name="opcion_6" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto7" >
		<br /><label for="opcion_7">Opcion o respuesta 7</label>
		<input type="text" name="opcion_7" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto8" >
		<br /><label for="opcion_8">Opcion o respuesta 8</label>
		<input type="text" name="opcion_8" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto9" >
		<br /><label for="opcion_9">Opcion o respuesta 9</label>
		<input type="text" name="opcion_9" class="form-control" placeholder="Respuesta"  required />
	</div>
	<div class="form-group oculto10" >
		<br /><label for="opcion_10">Opcion o respuesta 10</label>
		<input type="text" name="opcion_10" class="form-control" placeholder="Respuesta"  required />
	</div>

	<div class="form-group text-center">
		<a class="btn btn-warning" id="abrir">+</a>
		
		<a class="btn btn-default" id="ocultar">-</a>
	</div>
	<div class="form-group text-center">
		<input type="submit" value="Agregar" class="btn btn-success pull-right">
		<a href="{{ url('/crear-encuesta') }}"> Regresar</a>
	</div>
{!! Form::close() !!}
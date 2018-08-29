@extends("layouts.app")
@section("content")
<p id="prueba"></p>
<div class="container">
	{!! Form::model($encuesta,['method'=>'PATCH','route'=>['encuestas.update',$encuesta->id_pregunta],'files'=>'true']) !!}
			{{Form::token()}}
			<div class="form-group">
		    	<label for="titulo">Titulo</label>
		    	<input type="titulo" class="form-control" name="titulo" id="titulo" value="{{$encuesta->titulo}}" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="fecha_finalizacion">Finaliza en:</label>
		    	<input type="datetime" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" value="{{$encuesta->fecha_finalizacion}}" required>
		  	</div>
		  	<div class="form-group">
		  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		    	<label class="radio-inline"><input id="activo" type="radio" name="estado" value="{{$encuesta->estado}}">Activo</label>
		    	<label class="radio-inline"><input id="inactivo" type="radio" name="estado" value="{{$encuesta->estado}}">Inactivo</label>
		    	@if ($encuesta->estado==1)
		  			<script>
		  				$("#activo").attr('checked', true);
		  			</script>
		  		@else 
		  			<script>
		  				$('#inactivo').attr('checked', true);
		  			</script>
		  		@endif
		  	</div>
		  	<div class="form-group">
				<label for="foto">Portada</label><br>
				<input id="foto" type="file" name="foto" value="{{asset('imagenes/encuestas/'.$encuesta->foto)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
				<label for="foto">
					<img id="portada" src="{{asset('imagenes/encuestas/'.$encuesta->foto)}}" class="img-responsive" alt="" style="width: 100px;"/>
				</label>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="imagen1">Pregunta 1</label>
					<input type="text" name="opcion1" class="form-control" value="{{$encuesta->opcion1}}">
					<input id="imagen1" type="file" name="imagen1" value="{{asset('imagenes/encuestas/'.$encuesta->imagen1)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen1">
						<img id="imagen1salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen1)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen2">Pregunta 2</label>
					<input type="text" name="opcion2" class="form-control" value="{{$encuesta->opcion2}}">
					<input id="imagen2" type="file" name="imagen2" value="{{asset('imagenes/encuestas/'.$encuesta->imagen2)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen2">
						<img id="imagen2salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen2)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen3">Pregunta 3</label>
					<input type="text" name="opcion3" class="form-control" value="{{$encuesta->opcion3}}">
					<input id="imagen3" type="file" name="imagen3" value="{{asset('imagenes/encuestas/'.$encuesta->imagen3)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen3">
						<img id="imagen3salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen3)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen4">Pregunta 4</label>
					<input type="text" name="opcion4" class="form-control" value="{{$encuesta->opcion4}}">
					<input id="imagen4" type="file" name="imagen4" value="{{asset('imagenes/encuestas/'.$encuesta->imagen4)}}" class="form-control" accept="image/jpeg, image/png, Image/bmp" style="display: none;">
					<br>
					<label for="imagen4">
						<img id="imagen4salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen4)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen5">Pregunta 5</label>
					<input type="text" name="opcion5" class="form-control" value="{{$encuesta->opcion5}}">
					<input id="imagen5" type="file" name="imagen5" value="{{asset('imagenes/encuestas/'.$encuesta->imagen5)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen5">
						<img id="imagen5salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen5)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="imagen6">Pregunta 6</label>
					<input type="text" name="opcion6" class="form-control" value="{{$encuesta->opcion6}}">
					<input id="imagen6" type="file" name="imagen6" value="{{asset('imagenes/encuestas/'.$encuesta->imagen6)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen6">
						<img id="imagen6salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen6)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen7">Pregunta 7</label>
					<input type="text" name="opcion7" class="form-control" value="{{$encuesta->opcion7}}">
					<input id="imagen7" type="file" name="imagen7" value="{{asset('imagenes/encuestas/'.$encuesta->imagen7)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen7">
						<img id="imagen7salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen7)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen8">Pregunta 8</label>
					<input type="text" name="opcion8" class="form-control" value="{{$encuesta->opcion8}}">
					<input id="imagen8" type="file" name="imagen8" value="{{asset('imagenes/encuestas/'.$encuesta->imagen8)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen8">
						<img id="imagen8salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen8)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen9">Pregunta 9</label>
					<input type="text" name="opcion9" class="form-control" value="{{$encuesta->opcion9}}">
					<input id="imagen9" type="file" name="imagen9" value="{{asset('imagenes/encuestas/'.$encuesta->imagen9)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen9">
						<img id="imagen9salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen9)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
				<div class="form-group">
					<label for="imagen10">Pregunta 10</label>
					<input type="text" name="opcion10" class="form-control" value="{{$encuesta->opcion10}}">
					<input id="imagen10" type="file" name="imagen10" value="{{asset('imagenes/encuestas/'.$encuesta->imagen10)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
					<br>
					<label for="imagen10">
						<img id="imagen10salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen10)}}" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
				</div>
			</div>
			<div class="form-group text-center">
				<a href="{{ url('/encuestas') }}"> Regresar al listado de encuestas</a>
				<input type="submit" value="Agregar" class="btn btn-success">
			</div>
			{!!Form::close()!!}
</div>
			
			
			

@endsection
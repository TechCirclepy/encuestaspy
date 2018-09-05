<div class="container">
	<h1 class="text-center">{{$pregunta->titulo}}</h1>
	@if(!empty($pregunta->foto))
		<img src="{{asset('imagenes/encuestas/'.$pregunta->foto)}}" class="img-responsive" style="width: 40px; height: 40px;"/>
	@endif
	<h5> <b>Encuesta disponible hasta:</b> {{$pregunta->fecha_finalizacion}}</h5>
	{!! Form::open(array('url'=>'encuestaspy/participar','method'=>'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true')) !!}
			{{Form::token()}}
		<div class="form-group">
			<p>1- <strong>{{$pregunta->opcion1}}</strong> </p>
			<label class="checkbox-inline"><input name="respuesta1" type="radio" value="1">SI</label>
			<label class="checkbox-inline"><input name="respuesta1" type="radio" value="2">NO</label>
		</div>
		<div class="form-group">
			<p>2- <strong>{{$pregunta->opcion2}}</strong> </p>
			<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
			<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
		</div>
		@if(!empty($pregunta->opcion3))
			<div class="form-group">
				<p>3- <strong>{{$pregunta->opcion3}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion4))
			<div class="form-group">
				<p>4- <strong>{{$pregunta->opcion4}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion5))
			<div class="form-group">
				<p>5- <strong>{{$pregunta->opcion5}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion6))
			<div class="form-group">
				<p>6- <strong>{{$pregunta->opcion6}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion7))
			<div class="form-group">
				<p>7- <strong>{{$pregunta->opcion7}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion8))
			<div class="form-group">
				<p>8- <strong>{{$pregunta->opcion8}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion9))
			<div class="form-group">
				<p>9- <strong>{{$pregunta->opcion9}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion10))
			<div class="form-group">
				<p>10- <strong>{{$pregunta->opcion10}}</strong> </p>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input name="respuesta2" type="radio" value="2">NO</label>
			</div>
		@endif
		<div class="form-group">
			<input type="hidden" name="idpregunta" value="{{$pregunta_id}}" class="form-control">
		</div>
		<div class="form-inline text-center">
			<button class="btn btn-warning">Volver</button>
			<button type="" class="btn btn-primary">Votar</button>
		</div>
	{!!Form::close()!!}
</div>
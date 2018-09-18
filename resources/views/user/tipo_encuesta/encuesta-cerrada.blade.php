<div class="container">
	<h1 class="text-center">{{$pregunta->titulo}}</h1>
	@if(!empty($pregunta->foto))
		<img src="{{asset('imagenes/encuestas/'.$pregunta->foto)}}" class="img-responsive" style="width: 40px; height: 40px;"/>
	@endif
	<h5><span class="badge badge-primary">Encuesta disponible hasta: {{$pregunta->fecha_finalizacion}}</span></h5>
	{!! Form::open(array('url'=>'encuestaspy/participar','method'=>'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true')) !!}
			{{Form::token()}}
		<div class="form-group">
			<p>1- <strong>{{$pregunta->opcion1}}</strong></p>
			<label class="contenedor">SI
			  <input name="respuesta1" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta1" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
		</div>
		<div class="form-group">
			<p>2- <strong>{{$pregunta->opcion2}}</strong> </p>
			<label class="contenedor">SI
			  <input name="respuesta2" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta2" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
		</div>
		@if(!empty($pregunta->opcion3))
			<div class="form-group">
				<p>3- <strong>{{$pregunta->opcion3}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta3" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta3" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion4))
			<div class="form-group">
				<p>4- <strong>{{$pregunta->opcion4}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta4" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta4" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion5))
			<div class="form-group">
				<p>5- <strong>{{$pregunta->opcion5}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta5" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta5" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>el>
			</div>
		@endif
		@if(!empty($pregunta->opcion6))
			<div class="form-group">
				<p>6- <strong>{{$pregunta->opcion6}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta6" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta6" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion7))
			<div class="form-group">
				<p>7- <strong>{{$pregunta->opcion7}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta7" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta7" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion8))
			<div class="form-group">
				<p>8- <strong>{{$pregunta->opcion8}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta8" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta8" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion9))
			<div class="form-group">
				<p>9- <strong>{{$pregunta->opcion9}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta9" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta9" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		@if(!empty($pregunta->opcion10))
			<div class="form-group">
				<p>10- <strong>{{$pregunta->opcion10}}</strong> </p>
				<label class="contenedor">SI
			  <input name="respuesta10" type="radio" value="1">
			  <span class="checkmark"></span>
			</label>
			<label class="contenedor">NO
			  <input name="respuesta10" type="radio" value="2">
			  <span class="checkmark"></span>
			</label>
			</div>
		@endif
		<div class="form-group">
			<input type="hidden" name="idpregunta" value="{{$pregunta_id}}" class="form-control">
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-inline text-center">
					<button class="btn btn-warning">Volver</button>
					<button type="submit" value="Votar" class="btn btn-success">VOTAR</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	{!!Form::close()!!}
</div>
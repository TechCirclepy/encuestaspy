<div class="container">
	<div class="text-center">
		<h1>{{$pregunta->titulo}}</h1>
		<h3>{{$pregunta->subtitulo}}</h3>
		<h5><b>Encuesta disponible hasta:</b> {{$pregunta->fecha_finalizacion}}</h5>
	</div>
	{!! Form::open(array('url'=>'encuestaspy/participar','method'=>'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true')) !!}
	@if(!empty($pregunta->opcion1))
		<div class="form-group">
			<label for="opcion1" class="checkbox-inline opcion1">
				@if(!empty($pregunta->imagen1))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen1)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion1" name="opcion" value="{{$pregunta->opcion1}}" type="radio">{{$pregunta->opcion1}}
				<input type="hidden" id="respuesta1" name="respuesta1">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion2))
		<div class="form-group">
			<label for="opcion2" class="checkbox-inline opcion2">
				@if(!empty($pregunta->imagen2))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen2)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion2" name="opcion" value="{{$pregunta->opcion2}}" type="radio">{{$pregunta->opcion2}}
				<input type="hidden" id="respuesta2" name="respuesta2">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion3))
		<div class="form-group">
			<label for="opcion3" class="checkbox-inline opcion3">
				@if(!empty($pregunta->imagen3))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen3)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion3" name="opcion" value="{{$pregunta->opcion3}}" type="radio">{{$pregunta->opcion3}}
				<input type="hidden" id="respuesta3" name="respuesta3">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion4))
		<div class="form-group">
			<label for="opcion4" class="checkbox-inline opcion4">
				@if(!empty($pregunta->imagen4))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen4)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion4" name="opcion" value="{{$pregunta->opcion4}}" type="radio">{{$pregunta->opcion4}}
				<input type="hidden" id="respuesta4" name="respuesta4">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion5))
		<div class="form-group">
			<label for="opcion5" class="checkbox-inline opcion5">
				@if(!empty($pregunta->imagen5))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen5)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion5" name="opcion" value="{{$pregunta->opcion5}}" type="radio">{{$pregunta->opcion5}}
				<input type="hidden" id="respuesta5" name="respuesta5">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion6))
		<div class="form-group">
			<label for="opcion6" class="checkbox-inline opcion6">
				@if(!empty($pregunta->imagen6))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen6)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion6" name="opcion" value="{{$pregunta->opcion6}}" type="radio">{{$pregunta->opcion6}}
				<input type="hidden" id="respuesta6" name="respuesta6">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion7))
		<div class="form-group">
			<label for="opcion7" class="checkbox-inline opcion7">
				@if(!empty($pregunta->imagen7))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen7)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion7" name="opcion" value="{{$pregunta->opcion7}}" type="radio">{{$pregunta->opcion7}}
				<input type="hidden" id="respuesta7" name="respuesta7">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion8))
		<div class="form-group">
			<label for="opcion8" class="checkbox-inline opcion8">
				@if(!empty($pregunta->imagen8))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen8)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion8" name="opcion" value="{{$pregunta->opcion8}}" type="radio">{{$pregunta->opcion8}}
				<input type="hidden" id="respuesta8" name="respuesta8">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion9))
		<div class="form-group">
			<label for="opcion9" class="checkbox-inline opcion9">
				@if(!empty($pregunta->imagen9))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen9)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion9" name="opcion" value="{{$pregunta->opcion9}}" type="radio">{{$pregunta->opcion9}}
				<input type="hidden" id="respuesta9" name="respuesta9">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion10))
		<div class="form-group">
			<label for="opcion10" class="checkbox-inline opcion10">
				@if(!empty($pregunta->imagen10))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen10)}}" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="143" alt="">
				@endif
				<input id="opcion10" name="opcion" value="{{$pregunta->opcion10}}" type="radio">{{$pregunta->opcion10}}
				<input type="hidden" id="respuesta10" name="respuesta10">
			</label>
		</div>
	@endif
		<div class="form-group">
			<input type="hidden" name="idpregunta" value="{{$pregunta_id}}" class="form-control">
		</div>
		<div class="form-inline text-center">
			<button class="btn btn-warning">Volver</button>
			<input type="submit" value="Votar" class="btn btn-primary">
		</div>
	{!!Form::close()!!}
</div>
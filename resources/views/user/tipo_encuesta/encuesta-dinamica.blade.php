<div class="container">
	<div class="text-center">
		<h3><span class="badge badge-pill badge-light">{{$pregunta->subtitulo}}</span></h3>
	</div>
	{!! Form::open(array('url'=>'encuestaspy/participar','method'=>'POST', 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true')) !!}
	@if(!empty($pregunta->opcion1))
		<div class="custom-control custom-radio">
			<label for="opcion1" class="checkbox-inline opcion1">
				@if(!empty($pregunta->imagen1))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen1)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input type="hidden" id="respuesta1" name="respuesta1">
				<input value="{{$pregunta->opcion1}}" type="radio" id="opcion1" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion1">{{$pregunta->opcion1}}</label>
			</label>		
		</div>
	@endif
	@if(!empty($pregunta->opcion2))
		<div class="custom-control custom-radio">
			<label for="opcion2" class="checkbox-inline opcion2">
				@if(!empty($pregunta->imagen2))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen2)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion2}}" type="radio" id="opcion2" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion2">{{$pregunta->opcion2}}</label>
				<input type="hidden" id="respuesta2" name="respuesta2">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion3))
		<div class="custom-control custom-radio">
			<label for="opcion3" class="checkbox-inline opcion3">
				@if(!empty($pregunta->imagen3))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen3)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion3}}" type="radio" id="opcion3" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion3">{{$pregunta->opcion3}}</label>
				<input type="hidden" id="respuesta3" name="respuesta3">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion4))
		<div class="custom-control custom-radio">
			<label for="opcion4" class="checkbox-inline opcion4">
				@if(!empty($pregunta->imagen4))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen4)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion4}}" type="radio" id="opcion4" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion4">{{$pregunta->opcion4}}</label>
				<input type="hidden" id="respuesta4" name="respuesta4">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion5))
		<div class="custom-control custom-radio">
			<label for="opcion5" class="checkbox-inline opcion5">
				@if(!empty($pregunta->imagen5))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen5)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion5}}" type="radio" id="opcion5" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion5">{{$pregunta->opcion5}}</label>
				<input type="hidden" id="respuesta5" name="respuesta5">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion6))
		<div class="custom-control custom-radio">
			<label for="opcion6" class="checkbox-inline opcion6">
				@if(!empty($pregunta->imagen6))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen6)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion6}}" type="radio" id="opcion6" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion6">{{$pregunta->opcion6}}</label>
				<input type="hidden" id="respuesta6" name="respuesta6">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion7))
		<div class="custom-control custom-radio">
			<label for="opcion7" class="checkbox-inline opcion7">
				@if(!empty($pregunta->imagen7))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen7)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion7}}" type="radio" id="opcion7" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion7">{{$pregunta->opcion7}}</label>
				<input type="hidden" id="respuesta7" name="respuesta7">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion8))
		<div class="custom-control custom-radio">
			<label for="opcion8" class="checkbox-inline opcion8">
				@if(!empty($pregunta->imagen8))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen8)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion8}}" type="radio" id="opcion8" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion8">{{$pregunta->opcion8}}</label>
				<input type="hidden" id="respuesta8" name="respuesta8">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion9))
		<div class="custom-control custom-radio">
			<label for="opcion9" class="checkbox-inline opcion9">
				@if(!empty($pregunta->imagen9))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen9)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion9}}" type="radio" id="opcion9" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion9">{{$pregunta->opcion9}}</label>
				<input type="hidden" id="respuesta9" name="respuesta9">
			</label>
		</div>
	@endif
	@if(!empty($pregunta->opcion10))
		<div class="custom-control custom-radio">
			<label for="opcion10" class="checkbox-inline opcion10">
				@if(!empty($pregunta->imagen10))
					<img src="{{asset('imagenes/encuestas/'.$pregunta->imagen10)}}" width="100" alt="">
				@else
					<img src="{{asset('imagenes/blanco.jpg')}}" width="100" alt="">
				@endif
				<input value="{{$pregunta->opcion10}}" type="radio" id="opcion10" name="opcion" class="custom-control-input">
      			<label class="custom-control-label" for="opcion10">{{$pregunta->opcion10}}</label>
				<input type="hidden" id="respuesta10" name="respuesta10">
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
@extends('layouts.app_user')
<?php
	$dt = new DateTime();
	//echo $dt->format('Y-m-d H:i:s');
 ?>
@section('content')
<div class="container">
 	<div class="row">
		@foreach ($preguntas as $pregunta)
			@if($pregunta->user_id == $empresa->id)
				@if($pregunta->estado == 1 )
					<div class="col-sm-3 col-xs-6">
						<div style="padding: 10px;"></div>
		                <a href="{{ url('encuestaspy/participar/create?id'.$pregunta->id_pregunta) }}">
		                	@if(empty($pregunta->foto))
		                		<img class="img-responsive portfolio-item" width="300" src="http://placehold.it/500x300" alt="">
		                	@else
		                    	<img id="imagen" class="img-responsive portfolio-item" src="{{asset('imagenes/encuestas/'.$pregunta->foto)}}" width="300" alt="">
		                    @endif
		                </a>
		                <p class="text-center">{{$pregunta->titulo}}</p>
		                @if ($dt->format('Y-m-d H:i:s') > $pregunta->fecha_finalizacion)
		                	<p style="color:#FF0000"; class="text-center">Encuesta finalizada</p>
		                @endif
		                <p class="text-center"><b>Culmina el:</b>{{$pregunta->fecha_finalizacion}}</p>
		            </div>
            	@endif
			@endif
		@endforeach
	</div>
</div>
@endsection
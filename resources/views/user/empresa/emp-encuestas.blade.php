@extends('layouts.user')
<?php
	$dt = new DateTime();
	//echo $dt->format('Y-m-d H:i:s');
 ?>
@section('content')
<section class="text-center mb-4">
<div class="row wow fadeIn">
  @foreach ($preguntas as $pregunta)
  	@if($pregunta->user_id == $empresa->id)
		@if($pregunta->estado == 1 )
    <div class="col-lg-3 col-md-3 mb-3">
      <div class="card">
        <div class="view overlay">
          @if(!empty($pregunta->foto))
            <a href="{{ url('encuestaspy/participar/create?id'.$pregunta->id_pregunta) }}">
            <img class="card-img-top" src="{{asset('imagenes/encuestas/'.$pregunta->foto)}}" height="200" width="300" alt="">
            </a>
          @else
            <img src="{{asset('user/img/sample.jpg')}}" height="200" width="300" alt="">
          @endif
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body text-center">
          <!--Category & Title-->
          <h5>
            <strong>
              <a href="{{ url('encuestaspy/participar/create?id'.$pregunta->id_pregunta) }}" class="dark-grey-text">{{$pregunta->titulo}} 
              @if ($dt->format('Y-m-d H:i:s') > $pregunta->fecha_finalizacion)
              	<br>
                <span class="badge badge-pill danger-color">Finalizado</span>
              @else
              	<br>
              	<span class="badge badge-pill primary-color">Culmina el: </b>{{$pregunta->fecha_finalizacion}}</span>
              @endif
              </a>
            </strong>
          </h5>
        </div>
      </div>
    </div>
    	@endif
     @endif
  @endforeach
</div>
</section>
@endsection
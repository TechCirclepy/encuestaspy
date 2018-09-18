@extends('layouts.user')
@section('content')
<?php
$url= $_SERVER["REQUEST_URI"];
$pregunta_id = intval(preg_replace('/[^0-9]+/', '', $url), 10);
?>
@foreach($preguntas as $pregunta)
	@if($pregunta->id_pregunta == $pregunta_id)
		@if($pregunta->tipo_encuesta == 'abierta')
			@include('user.tipo_encuesta.encuesta-abierta')
		@elseif($pregunta->tipo_encuesta == 'cerrada')
			@include('user.tipo_encuesta.encuesta-cerrada')
		@elseif($pregunta->tipo_encuesta == 'resp_abierta')
			@include('user.tipo_encuesta.encuesta-resp-abierta')
		@elseif($pregunta->tipo_encuesta == 'dinamica')
			@include('user.tipo_encuesta.encuesta-dinamica')
		@endif
	@endif
@endforeach
@endsection
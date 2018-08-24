@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-6">
		@include('admin.encuestas.form', ['encuesta' => $encuesta, 'url' => '/crear-encuesta', 'method' => 'POST'])
	</div>
	<div class="col-md-6">
		<h3 class="text-center">
			Previzualizacion
		</h3>
		<h1 class="text-center" id="resultado"></h1>
		<h6>Encuesta valida hasta: <b id="resultado_fecha"></b></h6>
		<div id="respuestas">
			<label class="checkbox-inline">
				<img id="foto1" src="https://openclipart.org/image/2400px/svg_to_png/190958/1392495957.png" width="25" height="25">
				<strong id="pregunta1"></strong>
			</label>
			<br>
			<label class="checkbox-inline"><input type="radio" value="1">SI</label>
			<label class="checkbox-inline"><input type="radio" value="0">NO</label>
		</div>
	</div>
</div>
@endsection
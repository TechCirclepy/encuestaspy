@extends('layouts.app')
@section('content')
<?php 
	$tipo_encuesta = $_GET['encuesta']; 
?>
<script>
	var tipo_encuesta = '<?php echo $tipo_encuesta; ?>';
</script>
<div class="container">
	<div class="col-md-6">
		@include('admin.encuestas.form', ['encuesta' => $encuesta, 'url' => '/crear-encuesta', 'method' => 'POST'])
	</div>
	<div class="col-md-6">
		@if ($tipo_encuesta == 'dinamica')
			<h3 class="text-center">
				Encuesta dinamica - Previzualizacion
			</h3>
			<h1 class="text-center" id="resultado">Nombre de la encuesta</h1>
			<h6>Encuesta valida hasta: <b id="resultado_fecha">2017/05/07</b></h6>
			<div id="respuestas">
				<div class="form-group">
					<h4 id="result_subtitulo"></h4>
				</div>
				<div class="form-inline">
					<label class="checkbox-inline">
						<img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="70" height="60">
						<input type="radio" name="respuesta">
						<strong id="pregunta1"></strong>
					</label>
				</div>
			</div>
		@endif
		@if ($tipo_encuesta == 'cerrada')
			<h3 class="text-center">
				Encuesta Cerrada - Previzualizacion
			</h3>
			<h1 class="text-center" id="resultado"></h1>
			<h6>Encuesta valida hasta: <b id="resultado_fecha"></b></h6>
			<div id="respuestas">
				<label class="checkbox-inline">
					<img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
					<strong id="pregunta1"></strong>
				</label>
				<br>
				<label class="checkbox-inline"><input type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input type="radio" value="0">NO</label>
			</div>
		@endif
		@if ($tipo_encuesta == 'abierta')
			<h3 class="text-center">
				Encuesta Abierta - Previzualizacion
			</h3>
			<h1 class="text-center" id="resultado"></h1>
			<h6>Encuesta valida hasta: <b id="resultado_fecha"></b></h6>
			<div id="respuestas">
				<label class="checkbox-inline">
					<img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
					<strong id="pregunta1"></strong>
				</label>
				<div style="padding: 5px;"></div>
				<label class="checkbox-inline"><input type="radio" value="1">SI</label>
				<label class="checkbox-inline"><input type="radio" value="0">NO</label>
				<label class="checkbox-inline"><input type="radio" value="0">PUEDE SER</label>
			</div>
		@endif
		@if ($tipo_encuesta == 'resp_abierta')
			<h3 class="text-center">
				Encuesta con respuesta abierta - Previzualizacion
			</h3>
			<h1 class="text-center" id="resultado">Aqui va el titulo</h1>
			<h6>Encuesta valida hasta: <b id="resultado_fecha">2017/05/07</b></h6>
			<div id="respuestas">
				<label class="checkbox-inline">
					<img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
					<strong id="pregunta1">aqui va la pregunta</strong>
				</label>
				<div style="padding: 5px;"></div>
				<input type="text" class="form-control" placeholder="responder">
			</div>
		@endif
	</div>
</div>
@endsection
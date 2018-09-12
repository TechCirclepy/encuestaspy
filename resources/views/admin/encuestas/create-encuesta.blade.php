@extends('layouts.admin')
@section('content')
<?php 
	$tipo_encuesta = $_GET['encuesta']; 
?>
<script>
	var tipo_encuesta = '{{$tipo_encuesta}}';
</script>
<div class="container-fluid">
    <div class="row">
		@include('admin.encuestas.form', ['encuesta' => $encuesta, 'url' => '/crear-encuesta', 'method' => 'POST'])
		@include('admin.encuestas.tipo-preview')
	</div>
</div>
@endsection
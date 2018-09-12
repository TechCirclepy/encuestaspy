@extends('layouts.admin')
@section('content')
@if (Auth::user()->activo==0)
	<div class="container">
		<h1>Ups! ya no tienes acceso al sistema.. ponte en contacto con el administrador</h1>
	</div>
@elseif(Auth::user()->nivel==0)
	<div class="container">
		<h1>El usuario es un cliente</h1>
	</div>
@else
<div class="container-fluid">            
	<div class="row">
		<div class="col-md-6 col-lg-4 col-xlg-3">
			<a data-toggle="modal" data-target="#myModal">
	            <div class="card card-hover">
	                <div class="box bg-cyan text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-book-multiple"></i></h1>
	                    <h6 class="text-white">Realizar Encuesta</h6>
	                </div>
	            </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xlg-3">
        	<a href="">
	            <div class="card card-hover">
	                <div class="box bg-success text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
	                    <h6 class="text-white">Estadisticas</h6>
	                </div>
	            </div>
            </a>
        </div>
		<div class="col-md-6 col-lg-4 col-xlg-3">
			<a href="{{url('encuestas')}}">
	            <div class="card card-hover">
	                <div class="box bg-warning text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-folder-multiple-outline"></i></h1>
	                    <h6 class="text-white">Mis encuestas</h6>
	                </div>
	            </div>
            </a>
        </div>

	</div>
</div>
@endif
@include('admin.encuestas.tipo-encuesta')
@endsection
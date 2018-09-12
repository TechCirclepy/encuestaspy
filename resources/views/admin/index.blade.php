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
        	<a href="{{url('/crear-encuesta')}}">
	            <div class="card card-hover">
	                <div class="box bg-success text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
	                    <h6 class="text-white">Encuestas</h6>
	                </div>
	            </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xlg-3">
        	<a href="{{ url('/empresas') }}">
	            <div class="card card-hover">
	                <div class="box bg-danger text-center">
	                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
	                    @if (Auth::user()->nivel==2)
	                    	<h6 class="text-white">Empresas</h6>
	                    @elseif(Auth::user()->nivel==1)
	                    	<h6 class="text-white">Mi empresa</h6>
						@endif
	                </div>
	            </div>
            </a>
        </div>
    </div>
</div>
@endif
@endsection
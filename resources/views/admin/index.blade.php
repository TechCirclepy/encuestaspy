@extends('layouts.app')
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
<div class="container">
	<div class="row">
            <div class="col-md-6">
            <a href="{{ url('/empresas') }}">
                <div class="thumbnail">
	                <img src="https://www.emibin.com/wp-content/uploads/2017/03/icono-empresa-naranja-min.png" alt="">
	                <div class="caption text-center">
	                	@if (Auth::user()->nivel==2)
		                    <h4><a href="{{ url('/empresas') }}">Empresas</a>
		                    </h4>
	                    @elseif(Auth::user()->nivel==1)
		                    <h4><a href="{{ url('/empresas') }}">Mi Empresa</a>
		                    </h4>
	                    @endif
	                    <p>Administra las empresas</p>
	                </div>
	            </div>
	        </a>
            </div>

            <div class="col-md-6">
            	<a href="{{url('/crear-encuesta')}}">
	                <div class="thumbnail">
		                <img src="https://cdn.icon-icons.com/icons2/300/PNG/256/statistics-market-icon_31842.png" alt="">
		                <div class="caption text-center">
		                    <h4><a href="{{url('/crear-encuesta')}}">Encuestas</a>
		                    </h4>
		                    <p>Administra las encuestas</p>
		                </div>
		            </div>
	            </a>
            </div>
        </div>
        <style>
        	.col-md-6 {
		    height: 200px;
		    width: 50%;
		}
        </style>
</div>
@endif
@endsection
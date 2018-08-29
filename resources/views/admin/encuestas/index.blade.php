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
            <div class="col-md-4">
            <a data-toggle="modal" data-target="#encuestaModal">
                <div class="thumbnail">
	                <img src="https://www.academiabb.com/wp-content/uploads/2016/03/Encuesta-Busy-Bee-clases-de-ingl%C3%A9s-Las-Palmas.png" alt="">
	                <div class="caption text-center">
		                    <h4><a data-toggle="modal" data-target="#encuestaModal">Realizar Encuesta</a>
		                    </h4>
		          
	                    <p>Publica nuevas encuestas</p>
	                </div>
	            </div>
	        </a>
            </div>

            <div class="col-md-4">
            	<a href="">
	                <div class="thumbnail">
		                <img src="https://culturacientifica.com/app/uploads/2016/07/ob_dcbddb_icono-encuestas.png" alt="">
		                <div class="caption text-center">
		                    <h4><a href="#">Estadisticas y resultados</a>
		                    </h4>
		                    <p>Conoce como reaccionaron a tus preguntas</p>
		                </div>
		            </div>
	            </a>
            </div>
             <div class="col-md-4">
            	<a href="{{url('encuestas')}}">
	                <div class="thumbnail">
		                <img src="https://antonioperez.pro/wp-content/uploads/2017/12/crud-rails-1.png" alt="">
		                <div class="caption text-center">
		                    <h4><a href="{{url('encuestas')}}">Mis Encuestas</a>
		                    </h4>
		                    <p>Edita tus encuestas</p>
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
@include('admin.encuestas.tipo-encuesta')
@endsection
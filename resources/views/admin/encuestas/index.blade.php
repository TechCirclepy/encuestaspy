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
            <a href="{{url('crear-encuesta/create')}}">
                <div class="thumbnail">
	                <img src="https://www.academiabb.com/wp-content/uploads/2016/03/Encuesta-Busy-Bee-clases-de-ingl%C3%A9s-Las-Palmas.png" alt="">
	                <div class="caption text-center">
		                    <h4><a href="{{url('crear-encuesta/create')}}">Realizar Encuesta</a>
		                    </h4>
		                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Encuestas</button>
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
            	<a href="{{url('/crear-encuesta')}}">
	                <div class="thumbnail">
		                <img src="https://antonioperez.pro/wp-content/uploads/2017/12/crud-rails-1.png" alt="">
		                <div class="caption text-center">
		                    <h4><a href="{{url('/crear-encuesta')}}">Mis Encuestas</a>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seleccione el tipo de encuesta</h4>
      </div>
      <div class="modal-body">
      	<div class="col-md-4">
	      	<a href="" class="text-center">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta Cerrada</h5>
	      	</a>
      	</div>
      	<div class="col-md-4">
      		<a href="{{url('crear-encuesta/create')}}" class="text-center">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta Abierta</h5>
      		</a>
      	</div>
      	<div class="col-md-4">
      		<a href="" class="text-center">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta con respuesta abierta</h5>
      		</a>
      	</div>
      </div><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
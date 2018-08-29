@extends('layouts.app')
@section('content')
@include('admin.encuestas.tipo-encuesta')
<div class="container">
  <h2>Listado de encuestas</h2>
  <a href="" data-toggle="modal" data-target="#encuestaModal" type="submit" class="btn btn-success">Agregar</a>
  <div class=" table table-responsive">            
  <table class="table table-striped">
    <thead>
      <tr style="white-space: nowrap;">
        <th>#</th>
        <th>Titulo</th>
        <th>Fecha Finalizacion</th>
        <th>Portada</th>
        <th>Estado</th>
        <th>Creado por</th>
        <th>Opcion 1</th>
        <th>Imagen de opcion 1</th>
        <th>Opcion 2</th>
        <th>Imagen de opcion 2</th>
        <th>Opcion 3</th>
        <th>Imagen de opcion 3</th>
        <th>Opcion 4</th>
        <th>Imagen de opcion 4</th>
        <th>Opcion 5</th>
        <th>Imagen de opcion 5</th>
        <th>Opcion 6</th>
        <th>Imagen de opcion 6</th>
        <th>Opcion 7</th>
        <th>Imagen de opcion 7</th>
        <th>Opcion 8</th>
        <th>Imagen de opcion 8</th>
        <th>Opcion 9</th>
        <th>Imagen de opcion 9</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($encuestas as $contador => $encuesta)
      <tr style="white-space: nowrap;">
        <td>{{$contador+1}}</td>
        <td>{{$encuesta->titulo}}</td>
        <td>{{$encuesta->fecha_finalizacion}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->foto)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        @if ($encuesta->estado == 0)
        <td>Inactivo</td>
        @else
		<td>Activo</td>
        @endif
        <td>{{$encuesta->user_id}}</td>
        <td>{{$encuesta->opcion1}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen1)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion2}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen2)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion3}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen3)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion4}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen4)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion5}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen5)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion6}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen6)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion7}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen7)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion8}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen8)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$encuesta->opcion9}}</td>
        <td><img src="{{asset('imagenes/encuestas/'.$encuesta->imagen9)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>
          <a href="{{route('encuestas.edit',$encuesta->id_pregunta)}}" class="btn btn-warning">Editar</a>
          @if ($encuesta->estado == 0)
          <a href="" class="btn btn-success" data-target="#modal-delete-{{$encuesta->id}}" data-toggle="modal">Activar</a>
          @else
          <a href="" class="btn btn-danger" data-target="#modal-delete-{{$encuesta->id}}" data-toggle="modal">Desactivar</a>
          @endif
        </td>
      </tr>
    @include('admin.encuestas.modal-estado')
    @endforeach
    </tbody>
  </table>
  </div>
  <a href="" type="submit" class="btn btn-success pull-right">Atras</a>
</div>
@endsection
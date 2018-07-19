@extends('layouts.app')
@section('content')
@if (Auth::user()->nivel==1)
  @foreach($empresas as $empresa)
    @if($empresa->id == Auth::user()->id)
      <div class="container">
          <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="{{asset('imagenes/empresas/'.$empresa->foto)}}" alt="" style="height: 500px; width: 700px;">
            </div>
            <div class="col-md-4">
                <h3><b>{{$empresa->name}}</b></h3>
                <p><strong>Datos</strong></p></h3>
                <ul>
                    <li><b>Email:</b> {{$empresa->email}}</li>
                    <li><b>Telefono:</b> {{$empresa->telefono}}</li>
                    <li><b>Miembro desde:</b> {{$empresa->created_at}}</li>
                </ul>
                <p><strong>Acciones</strong></p>
                <ul>
                   <a href="{{URL::action('CambiarPassEmpresaController@edit',$empresa->id)}}" class="btn btn-warning">Cambiar contraseña</a><hr>
                   <a href="#" class="btn btn-info">Ir a encuestas</a><hr>
                   <a href="{{url('admin')}}" class="btn btn-success">Volver</a>
                </ul>
            </div>
          </div>
      </div>
    @endif
  @endforeach
@else
<div class="container">
  <h2>Listado de empresas</h2>
  <a href="{{ url('/empresas/create') }}" type="submit" class="btn btn-success">Agregar</a>
  @include('admin.empresa.search')            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>telefono</th>
        <th>Foto</th>
        <th>Actualizado</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach($empresas as $keyIndex => $empresa)
      <tr>
        <td>{{$keyIndex+1}}</td>
        <td>{{$empresa->name}}</td>
        <td>{{$empresa->email}}</td>
        <td>{{$empresa->telefono}}</td>
        <td>
          <img src="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="img-responsive" style="width: 40px; height: 40px;"/></td>
        <td>{{$empresa->updated_at}}</td>
        <td class="inline-block">
          <a href="{{route('empresas.edit',$empresa->id)}}" class="btn btn-warning">Editar</a>
        	@if ($empresa->activo==1)
            <a href="" data-target="#modal-delete-{{$empresa->id}}" data-toggle="modal"><button class="btn btn-danger">Desactivar</button></a>
          @else
            <a href="" data-target="#modal-delete-{{$empresa->id}}" data-toggle="modal"><button class="btn btn-success">Activar</button></a>
          @endif
        </td>
      </tr>
      @include('admin.empresa.modal')
      @endforeach
    </tbody>
  </table>
  {{ $empresas->links() }}
  <a href="{{url('admin')}}" type="submit" class="btn btn-success pull-right">Atras</a>
</div>
@endif
@endsection

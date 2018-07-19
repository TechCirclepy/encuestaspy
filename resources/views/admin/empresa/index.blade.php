@extends('layouts.app')
@section('content')
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
      @endforeach
    </tbody>
  </table>
  {{ $empresas->links() }}
  @include('admin.empresa.modal')
</div>
@endsection

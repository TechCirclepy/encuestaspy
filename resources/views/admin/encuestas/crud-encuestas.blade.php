@extends('layouts.admin')
@section('content')
@include('admin.encuestas.tipo-encuesta')
@include('admin.encuestas.mensajes')
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/extra-libs/multicheck/multicheck.css')}}">
<link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Listado de encuestas</h5>
                    <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success">Agregar</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titulo</th>
                                    <th>Fecha finalizacion</th>
                                    <th>Portada</th>
                                    <th>Estado</th>
                                    <th>Creado por:</th>
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
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Titulo</th>
                                    <th>Fecha finalizacion</th>
                                    <th>Portada</th>
                                    <th>Estado</th>
                                    <th>Creado por:</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script><!--
<script src="{{asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>-->
<script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
  $('#zero_config').DataTable();
</script>
@endsection
@extends('layouts.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/extra-libs/multicheck/multicheck.css')}}">
<link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
@if (Auth::user()->nivel==1)
  @foreach($empresas as $empresa)
    @if($empresa->id == Auth::user()->id)
      <div class="container-fluid">       
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">{{$empresa->name}}</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                <!-- Tabs -->
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Perfil</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="p-20">
                                <img src="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Datos</h4>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"><b>Empresa:</b></label>
                        <div class="col-sm-9">
                            {{$empresa->name}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"><b>Email:</b></label>
                        <div class="col-sm-9">
                            {{$empresa->email}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"><b>Telefono:</b> </label>
                        <div class="col-sm-9">
                            {{$empresa->telefono}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label"><b>Miembro desde:</b></label>
                        <div class="col-sm-9">
                            {{$empresa->created_at}}
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="{{route('empresas.edit',$empresa->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{URL::action('CambiarPassEmpresaController@edit',$empresa->id)}}" class="btn btn-warning">Cambiar contraseña</a>
                        <a href="{{url('crear-encuesta')}}" class="btn btn-info">Ir a encuestas</a> 
                        <a href="{{url('administracion')}}" class="btn btn-success">Volver</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    @endif
  @endforeach
@else
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Listado de empresas</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                      <a href="{{ url('/empresas/create') }}" class="btn btn-success">Agregar</a>
                    </h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
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
                                <tr style="white-space: nowrap;">
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
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>telefono</th>
                                    <th>Foto</th>
                                    <th>Actualizado</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- this page js -->
<script src="{{asset('admin/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
  $('#zero_config').DataTable();
</script>
@endsection

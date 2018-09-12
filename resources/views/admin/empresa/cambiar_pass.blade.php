@extends('layouts.admin')
@section('content')
@include('admin.empresa.mensajes')
<div class="container-fluid">
 	<div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::model($empresa,['method'=>'PATCH','url'=>['/cambiar-pass/'.$empresa->id]]) !!}
				{{Form::token()}}
                    <div class="card-body">
                        <h4 class="card-title">Cambiar contraseña</h4>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" name="password" class="form-control" placeholder="Ingrese Contraseña"">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Confirmar Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" name="password_confirmation" class="form-control" placeholder="Confirme contraseña">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                        	<button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{url('empresas')}}" class="btn btn-success">Volver</a>
                        </div>
                    </div>
                    
                {!!Form::close()!!}
            </div>
        </div>
	</div>
</div>
@endsection
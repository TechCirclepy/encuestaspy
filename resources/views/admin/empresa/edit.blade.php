@extends("layouts.admin")
@section("content")
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::model($empresa,['method'=>'PATCH','route'=>['empresas.update',$empresa->id],'files'=>'true']) !!}
			{{Form::token()}}
                    <div class="card-body">
                        <h4 class="card-title">Editar Empresa</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" name="name" value="{{$empresa->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" name="email" value="{{$empresa->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefono</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="telefono" id="lname" value="{{$empresa->telefono}}" id="telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Logotipo</label>
                            <div class="col-sm-9">
                                <input type="file" name="foto" class="form-control" id="email1" value="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
                                <img src="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="img-responsive" alt="" style="width: 100px;"/>
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <input type="submit" value="Agregar" class="btn btn-success pull-right">
							<a class="btn btn-primary" href="{{ url('/empresas') }}"> Regresar</a>
                        </div>
                    </div>
               {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@endsection
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
				{{Form::token()}}
                    <div class="card-body">
                        <h4 class="card-title">Agregar Empresa</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" name="name" placeholder="Nombre de la empresa" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="lname" name="email" placeholder="Email de la empresa" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" name="password" placeholder="******" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Confirmar Contraseña</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" name="password_confirmation" placeholder="******" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telefono</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="telefono" id="lname" placeholder="Telefono de la empresa" id="telefono" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Logotipo</label>
                            <div class="col-sm-9">
                                <input type="file" placeholder="Logotipo de la empresa" name="foto" class="form-control" id="email1" class="form-control" accept="image/jpeg, image/png, image/bmp" required>
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
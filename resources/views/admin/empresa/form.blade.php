{!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
	{{Form::token()}}
	<div class="form-group">
    	<label for="name">Nombre</label>
    	<input type="name" class="form-control" name="name" id="name" required>
  	</div>
  	<div class="form-group">
    	<label for="email">Email</label>
    	<input type="email" class="form-control" name="email" id="email" required>
  	</div>
  	<div class="form-group">
		<br /><label for="Nombre">Contraseña</label>
		<input type="password" name="password" class="form-control" placeholder="Ingrese Contraseña"  required />
	</div>
	<div class="form-group">
		<br /><label for="Nombre">Confirmar Contraseña</label>
		<input type="password" name="password_confirmation" class="form-control" placeholder="Ingrese Contraseña"  required />
	</div>
  	<div class="form-group">
    	<label for="telefono">Telefono</label>
    	<input type="number" name="telefono" class="form-control" id="telefono">
  	</div>
  	<div class="form-group">
		<label for="imagen">Logotipo</label>
		<input type="file" name="foto" class="form-control" accept="image/jpeg, image/png, image/bmp" >
	</div>
	<div class="form-group text-center">
		<input type="submit" value="Agregar" class="btn btn-success pull-right">
		<a href="{{ url('/empresas') }}"> Regresar al listado de productos</a>
	</div>
{!! Form::close() !!}
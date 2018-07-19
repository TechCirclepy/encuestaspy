@extends("layouts.app")
@section("content")
<div class="container">
	{!! Form::model($empresa,['method'=>'PATCH','route'=>['empresas.update',$empresa->id],'files'=>'true']) !!}
			{{Form::token()}}
			<div class="form-group">
		    	<label for="name">Nombre</label>
		    	<input type="name" class="form-control" name="name" id="name" value="{{$empresa->name}}" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="email">Email</label>
		    	<input type="email" class="form-control" name="email" id="email" value="{{$empresa->email}}" required>
		  	</div>
		  	<div class="form-group">
		    	<label for="telefono">Telefono</label>
		    	<input type="number" name="telefono" class="form-control" value="{{$empresa->telefono}}" id="telefono">
		  	</div>
		  	<div class="form-group">
				<label for="imagen">Logotipo</label>
				<input type="file" name="foto" value="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="form-control" accept="image/jpeg, image/png, image/bmp">
				<img src="{{asset('imagenes/empresas/'.$empresa->foto)}}" class="img-responsive" alt="" style="width: 100px;"/>
			</div>
			<div class="form-group text-center">
				<input type="submit" value="Agregar" class="btn btn-success pull-right">
				<a href="{{ url('/empresas') }}"> Regresar al listado de productos</a>
			</div>
			
			{!!Form::close()!!}
</div>
@endsection
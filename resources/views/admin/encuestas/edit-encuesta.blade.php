@extends("layouts.admin")
@section("content")
<div class="container-fluid">
	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            {!!Form::model($encuesta,['method'=>'PATCH','route'=>['encuestas.update',$encuesta->id_pregunta],'files'=>'true']) !!}
					{{Form::token()}}
	                <div class="card-body">
	                    <h4 class="card-title">Editar encuesta</h4>
	                    <div class="form-group row">
	                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Titulo</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$encuesta->titulo}}" required>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Finaliza el:</label>
	                        <div class="col-sm-9">
	                            <input type="datetime" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" value="{{$encuesta->fecha_finalizacion}}" required>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Estado</label>
	                        <div class="col-sm-9">
	                            <label class="checkbox-inline"><input id="activo" type="radio" checked name="estado" value="1">Activo</label>
                        		<label class="checkbox-inline"><input id="inactivo" type="radio" name="estado" value="0">Inactivo</label>
						    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
						    	@if ($encuesta->estado==1)
						  			<script>
						  				$("#activo").attr('checked', true);
						  			</script>
						  		@else 
						  			<script>
						  				$('#inactivo').attr('checked', true);
						  			</script>
						  		@endif
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="foto" class="col-sm-3 text-right control-label col-form-label">Portada</label>
	                        <input id="foto" type="file" name="foto" value="{{asset('imagenes/encuestas/'.$encuesta->foto)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
	                        <div class="col-sm-9">
	                            <label for="foto">
									<img id="portada" src="{{asset('imagenes/encuestas/'.$encuesta->foto)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    @if($encuesta->tipo_encuesta == 'dinamica')
	                    <div class="form-group row">
	                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Titulo principal</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="subtitulo" id="subtitulo" value="{{$encuesta->subtitulo}}" required>
	                        </div>
	                    </div>
	                    @endif
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 1</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion1" value="{{$encuesta->opcion1}}">
	                            <input id="imagen1" type="file" name="imagen1" value="{{asset('imagenes/encuestas/'.$encuesta->imagen1)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen1">
									<img id="imagen1salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen1)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 2</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion2" value="{{$encuesta->opcion2}}">
	                            <input id="imagen2" type="file" name="imagen2" value="{{asset('imagenes/encuestas/'.$encuesta->imagen2)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen2">
									<img id="imagen2salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen2)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 3</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion3" value="{{$encuesta->opcion3}}">
	                            <input id="imagen3" type="file" name="imagen3" value="{{asset('imagenes/encuestas/'.$encuesta->imagen3)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen3">
									<img id="imagen3salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen3)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 4</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion4" value="{{$encuesta->opcion4}}">
	                            <input id="imagen4" type="file" name="imagen4" value="{{asset('imagenes/encuestas/'.$encuesta->imagen4)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen4">
									<img id="imagen4salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen4)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 5</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion5" value="{{$encuesta->opcion5}}">
	                            <input id="imagen5" type="file" name="imagen5" value="{{asset('imagenes/encuestas/'.$encuesta->imagen5)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen5">
									<img id="imagen5salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen5)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 6</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion6" value="{{$encuesta->opcion6}}">
	                            <input id="imagen6" type="file" name="imagen6" value="{{asset('imagenes/encuestas/'.$encuesta->imagen6)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen6">
									<img id="imagen6salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen6)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 7</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion7" value="{{$encuesta->opcion7}}">
	                            <input id="imagen7" type="file" name="imagen7" value="{{asset('imagenes/encuestas/'.$encuesta->imagen7)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen7">
									<img id="imagen7salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen7)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 8</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion8" value="{{$encuesta->opcion8}}">
	                            <input id="imagen8" type="file" name="imagen8" value="{{asset('imagenes/encuestas/'.$encuesta->imagen8)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen8">
									<img id="imagen8salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen8)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 9</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion9" value="{{$encuesta->opcion9}}">
	                            <input id="imagen9" type="file" name="imagen9" value="{{asset('imagenes/encuestas/'.$encuesta->imagen9)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen9">
									<img id="imagen9salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen9)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                    <div class="form-group row">
	                        <label for="" class="col-sm-3 text-right control-label col-form-label">Pregunta 10</label>
	                        <div class="col-sm-9">
	                            <input type="text" class="form-control" name="opcion10" value="{{$encuesta->opcion10}}">
	                            <input id="imagen10" type="file" name="imagen10" value="{{asset('imagenes/encuestas/'.$encuesta->imagen10)}}" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
								<br>
								<label for="imagen10">
									<img id="imagen10salida" src="{{asset('imagenes/encuestas/'.$encuesta->imagen10)}}" class="img-responsive" alt="" style="width: 100px;"/>
								</label>
	                        </div>
	                    </div>
	                </div>
	                <div class="border-top">
	                    <div class="card-body text-center">
	                        <button type="submit" class="btn btn-primary">Editar</button>
	                    </div>
	                </div>
	            {!!Form::close()!!}
	        </div>
	    </div>
	</div>
</div>
@endsection
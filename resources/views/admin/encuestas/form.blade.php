<div class="col-md-6">
    <div class="card">
{!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
	{{Form::token()}}
		@if ($tipo_encuesta == 'dinamica')
            <div class="card-body contenedor">
                <h4 class="card-title">Encuesta</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Titulo de la encuesta</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo de la encuesta .." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Fecha de finalizacion</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required placeholder="Fecha finalizacion">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 text-right control-label col-form-label">Portada</label>
                    <div class="col-sm-9">
                        <input id="foto" type="file" name="foto" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
                        <label for="foto">
                        <img id="portada" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" class="img-responsive" alt="" style="width: 100px;"/>
                    </label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Estado de la encuesta</label>
                    <div class="col-sm-9">
                        <label class="checkbox-inline"><input type="radio" checked name="estado" value="1">Activo</label>
                        <label class="checkbox-inline"><input type="radio" name="estado" value="0">Inactivo</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 text-right control-label col-form-label">Titulo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="subtitulo" id="subtitulo" required placeholder="Titulo principal de la encuesta ..">
                    </div>
                </div>
                <div class="form-inline row">
                    <label for="imagen1" class="col-sm-3 text-right control-label col-form-label">       Respuesta<br>
                        <div style="padding: 5px;"></div>
                        <img id="imgSalida" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25"/>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="opcion1" id="opcion1" class="form-control" placeholder="Escriba aqui su respuesta ..." required>
                        <input name="imagen1" id="imagen1" type="file" style="display: none;" />
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="tipo_encuesta" value="{{$tipo_encuesta}}" class="form-control" style="display: none;">
                </div>
            </div>
            <script>
                var e = 1;
            </script>
            <div class="form-group text-center">
                <a class="btn btn-success" onclick="addPregunta(e), addImagen(e)" id="abrir">
                    <i class="mdi mdi-plus-circle"></i>
                </a>
                    
                <a class="btn btn-warning" id="ocultar">
                    <i class="mdi mdi-minus-circle"></i>
                </a>
            </div>
            <div class="border-top">
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>
	

		@else
            <div class="card-body contenedor">
                <h4 class="card-title">Encuesta</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Titulo de la encuesta</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo de la encuesta .." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Fecha de finalizacion</label>
                    <div class="col-sm-9">
                        <input type="datetime-local" class="form-control" name="fecha_finalizacion" id="fecha_finalizacion" required placeholder="Fecha finalizacion">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-3 text-right control-label col-form-label">Portada</label>
                    <div class="col-sm-9">
                        <input id="foto" type="file" name="foto" class="form-control" accept="image/jpeg, image/png, image/bmp" style="display: none;">
                        <label for="foto">
						<img id="portada" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" class="img-responsive" alt="" style="width: 100px;"/>
					</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Estado de la encuesta</label>
                    <div class="col-sm-9">
                        <label class="checkbox-inline"><input type="radio" checked name="estado" value="1">Activo</label>
						<label class="checkbox-inline"><input type="radio" name="estado" value="0">Inactivo</label>
                    </div>
                </div>
                <div class="form-inline row">
                    <label for="imagen1" class="col-sm-3 text-right control-label col-form-label">		Pregunta
                    	<div style="padding: 5px;"></div>
                    	<img id="imgSalida" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25"/>
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="opcion1" id="opcion1" class="form-control" placeholder="Pregunta ..." required>
                        <input name="imagen1" id="imagen1" type="file" style="display: none;" />
                    </div>
                </div>
                <div class="form-group">
					<input type="text" name="tipo_encuesta" value="{{$tipo_encuesta}}" class="form-control" style="display: none;">
				</div>
            </div>
            <script>
				var e = 1;
			</script>
			<div class="form-group text-center">
				<a class="btn btn-success" onclick="addPregunta(e), addImagen(e)" id="abrir">
					<i class="mdi mdi-plus-circle"></i>
				</a>
					
				<a class="btn btn-warning" id="ocultar">
					<i class="mdi mdi-minus-circle"></i>
				</a>
			</div>
            <div class="border-top">
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>
              
		@endif
{!! Form::close() !!}
<div class="col-md-6">
    <div class="card">
        <form class="form-horizontal">
            <div class="card-body">
                @if ($tipo_encuesta == 'cerrada')
                <h4 class="card-title">Encuesta Cerrada / Previzualizacion</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <h4 class="" id="resultado">Nombre de la encuesta</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Valida hasta: </label>
                    <div class="col-sm-9">
                        <b id="resultado_fecha">2017/05/07</b>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">
                        <img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
                    </label>
                    <div class="col-sm-9">
                        <strong id="pregunta1">Aqui va tu pregunta</strong><br>
                        <label class="checkbox-inline"><input name="ejemplo" type="radio" value="1">SI</label>
                        <label class="checkbox-inline"><input name="ejemplo" type="radio" value="0">NO</label>
                    </div>
                </div>
                <div id="respuestas"></div>
            </div>
            @endif
            @if ($tipo_encuesta == 'abierta')
                <h4 class="card-title">Encuesta Abierta / Previzualizacion</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <h4 class="" id="resultado">Nombre de la encuesta</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Valida hasta: </label>
                    <div class="col-sm-9">
                        <b id="resultado_fecha">2017/05/07</b>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">
                        <img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
                    </label>
                    <div class="col-sm-9">
                        <strong id="pregunta1">Aqui va tu pregunta</strong><br>
                        <label class="checkbox-inline"><input name="ejemplo" type="radio" value="1">SI</label>
                        <label class="checkbox-inline"><input name="ejemplo" type="radio" value="0">NO</label>
                        <label class="checkbox-inline"><input name="ejemplo" type="radio" value="0">Tal vez</label>
                    </div>
                </div>
                <div id="respuestas"></div>
            </div>
            @endif
            @if ($tipo_encuesta == 'resp_abierta')
                <h4 class="card-title">Encuesta con respuesta abierta / Previzualizacion</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <h4 class="" id="resultado">Nombre de la encuesta</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Valida hasta: </label>
                    <div class="col-sm-9">
                        <b id="resultado_fecha">2017/05/07</b>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">
                        <img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
                    </label>
                    <div class="col-sm-9">
                        <strong id="pregunta1">Aqui va tu pregunta</strong><br>
                        <input type="text" class="form-control" name="ejemplo" id="ejemplo" required placeholder="Responder">
                    </div>
                </div>
                <div id="respuestas"></div>
            </div>
            @endif
            @if ($tipo_encuesta == 'dinamica')
                <h4 class="card-title">Encuesta dinamica / Previzualizacion</h4>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                    <div class="col-sm-9">
                        <h4 class="" id="resultado">Nombre de la encuesta</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Valida hasta: </label>
                    <div class="col-sm-9">
                        <b id="resultado_fecha">2017/05/07</b>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label"> </label>
                    <div class="col-sm-9">
                        <h4 id="result_subtitulo">Titulo ..</h4>
                    </div>
                </div>
                <div class="form-inline row">
                    <label class="col-sm-3 text-right control-label col-form-label">
                        <div style="padding-right: 60px;"></div>
                        <img id="foto1" src="http://pngimages.net/sites/default/files/add-a-picture-png-image-15339.png" width="25" height="25">
                        <div style="padding-right: 10px;"></div>
                        <input type="radio" class="form-control" name="ejemplo" id="ejemplo" required placeholder="Responder">
                    </label>
                    <div class="col-sm-9">
                        <strong id="pregunta1">Aqui va tu posible respuesta</strong>
                    </div>
                </div>
                <div id="respuestas"></div>
            </div>
            @endif
            <div class="border-top">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-primary">Votar</button>
                </div>
            </div>
        </form>
    </div>
</div>

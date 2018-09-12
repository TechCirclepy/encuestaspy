<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Seleccione el tipo de encuesta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6 col-lg-3 col-xlg-3">
                    <a href="{{url('crear-encuesta/create?encuesta=cerrada')}}" class="text-center">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Cerrada</h6>
                            </div>
                        </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xlg-3">
                      <a href="{{url('crear-encuesta/create?encuesta=abierta')}}">
                      <div class="card card-hover">
                          <div class="box bg-info text-center">
                              <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                              <h6 class="text-white">Abierta</h6>
                          </div>
                      </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xlg-3">
                      <a href="{{url('crear-encuesta/create?encuesta=resp_abierta')}}" class="text-center">
                      <div class="card card-hover">
                          <div class="box bg-success text-center">
                              <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                              <h6 class="text-white">Respuesta</h6>
                          </div>
                      </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-3 col-xlg-3">
                      <a href="{{url('crear-encuesta/create?encuesta=dinamica')}}" class="text-center">
                      <div class="card card-hover">
                          <div class="box bg-cyan text-center">
                              <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                              <h6 class="text-white">Dinamica</h6>
                          </div>
                      </div>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>






























<!-- Modal -->
<div id="encuestaModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seleccione el tipo de encuesta</h4>
      </div>
      <div class="modal-body">
      	<div class="col-md-3">
	      	<a href="{{url('crear-encuesta/create?encuesta=cerrada')}}" class="text-center">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta Cerrada</h5>
	      	</a>
      	</div>
      	<div class="col-md-3">
      		<a href="{{url('crear-encuesta/create?encuesta=abierta')}}">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta Abierta</h5>
      		</a>
      	</div>
      	<div class="col-md-3">
      		<a href="{{url('crear-encuesta/create?encuesta=resp_abierta')}}" class="text-center">
	      		<img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
	      		<h5>Encuesta con respuesta abierta</h5>
      		</a>
      	</div>
        <div class="col-md-3">
          <a href="{{url('crear-encuesta/create?encuesta=dinamica')}}" class="text-center">
            <img width="100" height="80" src="https://www.bostonmedicalgroup.es/wp-content/uploads/2016/02/encuestaBMG-2.png" alt="">
            <h5>Encuesta dinamica</h5>
          </a>
        </div>
      </div><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

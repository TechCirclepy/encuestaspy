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

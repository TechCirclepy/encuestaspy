<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$encuesta->id}}">

	{{Form::Open(array('action'=>array('CrudEncuestasController@destroy',$encuesta->id),'method'=>'delete'))}}
	
	<div class="modal-dialog">
		<div class="modal-content">
			@if ($encuesta->estado==1) 
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Confirme si desea Desactivar la Encuesta</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			@else
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Confirme si desea Activar la Empresa</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			@endif
		</div>
	</div>

	{{Form::Close()}}
	
</div>
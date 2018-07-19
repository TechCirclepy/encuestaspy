{!! Form::open(array('url'=>'empresas','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="input-group input-group-sm mb-3 pull-right">
  <input type="text" name="searchText" value="{{$query}}" class="form-control " placeholder="¿Qué Buscas?">
</div>
{{Form::close()}}
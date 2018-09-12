<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@if(session()->has('addEmpresa'))
<script>
	console.log('empresa agregada');
	$(document).ready(function(){
		$.notify("Empresa agregada con exito!", "success");
	});
</script>
@endif
@if (count($errors)>0)
	@foreach ($errors->all() as $error)
		<script>
			$(document).ready(function(){
				$.notify("{{$error}}", "info");
			});
		</script>
	@endforeach
@endif
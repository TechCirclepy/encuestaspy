<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@if(session()->has('addEncuesta'))
<script>
	$(document).ready(function(){
		$.notify("Encuesta agregada con exito!", "success");
	});
</script>
@endif
@if(session()->has('editEncuesta'))
<script>
	$(document).ready(function(){
		$.notify("Encuesta editada con exito!", "success");
	});
</script>
@endif
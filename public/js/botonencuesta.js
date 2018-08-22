function addPregunta(e) {
	var pregunta = $(
		'<div class="form-inline clase_'+e+'">'+
			'<label for="opcion1">Opcion o respuesta</label><br>'+
			'<label for="imagen'+e+'">'+
				'<img id="imgSalida_'+e+'" src="https://cdn.pixabay.com/'+
				'photo/2017/06/06/00/33/edit-icon-2375785_640.png"'+
				'width="25" height="25"/>'+
			'</label>'+
			'<input id="'+e+'" type="text" name="opcion'+e+'"'+
			'class="form-control" placeholder="Respuesta"  required />' +
			'<input name="imagen'+e+'" id="imagen'+e+'" type="file"'+
			'style="display: none;" />'+
		'</div>'
		);
	var preview = $(
		'<br>'+
		'<strong id="pregunta"></strong>'+
			'<br>'+
			'<label class="checkbox-inline"><input type="radio" value="1">SI</label>'+
			'<label class="checkbox-inline"><input type="radio" value="0">NO</label>'
		);
	if (e >= 10 ){

	} else {
		$(".contenedor").append(pregunta);
		$("#respuestas").append(preview);
	}
}

function addImagen(e) {
  $(function() {
  $('#imagen'+e+'').change(function(x) {
      addImage(x); 
     });
     function addImage(x){
      var file = x.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
     function fileOnload(x) {
      var result=x.target.result;
      $('#imgSalida_'+e+'').attr("src",result);
     }
    });
}

e++;
$(document).ready(function() {
	$('#abrir').click(function () {
		if (e >= 10) {
			alert('Solo puede agregar 10 respuestas')
		} else {
	    	e++;
	    }
	});
	$('#ocultar').click(function () {
		if (e < 2) {
			alert('La pregunta debe tener al menos una respuesta')
		} else {
			e--;
			var dato = '.clase_'+e;
			console.log(dato);
			$(".clase_"+e).remove();
		}
	}); 
});
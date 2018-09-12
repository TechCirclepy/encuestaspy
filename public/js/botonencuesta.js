//funcion para agregar nuevos input donde la variable "e" es el id
function addPregunta(e) {
	var pregunta = $(
					'<div class="form-inline row clase_'+e+'">'+
						'<label for="imagen'+e+'" class="col-sm-3 text-right control-label col-form-label">'+
							'Pregunta'+
							'<div style="padding: 5px;"></div>'+
							'<img id="imgSalida_'+e+'" src="http://pngimages.net/sites/default/files/'+
							'add-a-picture-png-image-15339.png" width="25" height="25"/>'+
						'</label>'+
						'<div class="col-sm-9">'+
							'<input type="text" name="opcion'+e+'" id="opcion'+e+'" class="form-control" '+
							'placeholder="Pregunta '+e+'" required>'+
							'<input name="imagen'+e+'" id="imagen'+e+'" type="file" style="display: none;" />'+
						'</div>'+
					'</div>');

	var preview = $(
					'<div class="form-group row" id="check'+e+'">'+
						'<label class="col-sm-3 text-right control-label col-form-label">'+
							'<img id="foto'+e+'" src="http://pngimages.net/sites/default/files/'+
							'add-a-picture-png-image-15339.png" width="25" height="25">'+
						'</label>'+
						'<div class="col-sm-9">'+
							'<strong id="pregunta'+e+'">Aqui va tu pregunta</strong><br>'+
							'<label class="checkbox-inline cerrada"><input name="ejemplo" type="radio" value="1"'+
							'>SI</label>'+
							'<label class="checkbox-inline cerrada"><input name="ejemplo" type="radio" value="0"'+
							'>NO</label>'+
							'<label class="checkbox-inline abierta"><input name="ejemplo" type="radio" value="0"'+
							'>Tal vez</label>'+
							'<input type="text" class="form-control resp_abierta" name="ejemplo" id="ejemplo"'+
							'required placeholder="Responder">'+
						'</div>'+
					'</div>'
		);
	var pregDinamica = $(
						'<div class="form-inline row clase_'+e+'" >'+
							'<label for="imagen'+e+'" class="col-sm-3 text-right control-label col-form-label">'+
								'Respuesta<br>'+
								'<div style="padding: 5px;"></div>'+
								'<img id="imgSalida_'+e+'" src="http://pngimages.net/sites/default/files/'+
								'add-a-picture-png-image-15339.png" width="25" height="25"/>'+
							'</label>'+
							'<div class="col-sm-9">'+
								'<input type="text" name="opcion'+e+'" id="opcion'+e+'" class="form-control"'+
								'placeholder="Escriba aqui su respuesta '+e+'" required>'+
								'<input name="imagen'+e+'" id="imagen'+e+'" type="file" style="display: none;" /'+
							'</div>'+
						'</div>'
		);

	var prevDinamic = $(
						'<div class="form-inline row" id="check'+e+'">'+
							'<label class="col-sm-3 text-right control-label col-form-label">'+
								'<div style="padding-right: 60px;"></div>'+
								'<img id="foto'+e+'" src="http://pngimages.net/sites/default/files/'+
								'add-a-picture-png-image-15339.png" width="25" height="25">'+
								'<div style="padding-right: 10px;"></div>'+
								'<input type="radio" class="form-control" name="ejemplo" id="ejemplo"'+
								'required placeholder="Responder">'+
							'</label>'+
							'<div class="col-sm-9">'+
								'<strong id="pregunta'+e+'">Aqui va tu posible respuesta</strong>'+
							'</div>'+
						'</div>'

		);
	if (e >= 11 ){

	} else if (tipo_encuesta == 'dinamica') {
		$(".contenedor").append(pregDinamica);
		$("#respuestas").append(prevDinamic);
	} else {
		$(".contenedor").append(pregunta);
		$("#respuestas").append(preview);	
	}

	if (tipo_encuesta == 'cerrada') {
		$('.abierta').remove();
		$('.resp_abierta').remove();
	} else if (tipo_encuesta == 'resp_abierta') {
		$('.abierta').remove();
		$('.cerrada').remove();

	} else if (tipo_encuesta == 'abierta') {
		$('.resp_abierta').remove();
	}


}
//funcion para cambiar y previzaulizar la imagen de las opciones en crear encuesta
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
      $('#foto'+e+'').attr("src",result);
     }
    });
}
/*cuando termina estas funciones va incrementando la variable
asi aumenta su valor cada ves que se hace click en agregar opciones*/
e++;
//validaciones para agregar y borrar opciones
$(document).ready(function() {
	$('#abrir').click(function () {
		if (e >= 11) {
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
			$("#check"+e).remove();
		}
	}); 
});
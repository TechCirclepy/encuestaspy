//funcion para agregar nuevos input donde la variable "e" es el id
function addPregunta(e) {
	var pregDinamica = $(
						'<div class="form-inline clase_'+e+'">'+
							'<label for="opcion1">posible respuesta '+e+'</label><br>'+
							'<label for="imagen'+e+'">'+
								'<img id="imgSalida_'+e+'" '+
								'src="http://pngimages.net/sites/default/files/add-a-'+
								'picture-png-image-15339.png" width="25" height="25"/>'+
							'</label>'+
							'<input type="text" id="opcion'+e+'" name="opcion'+e+'" class="form-control">'+
							'<input name="imagen'+e+'" id="imagen'+e+'" type="file" style="display: none;"/>'+
						'</div>');
	var pregunta = $(
					'<div class="form-inline clase_'+e+'">'+
						'<label for="opcion1">Pregunta</label><br>'+
						'<label for="imagen'+e+'">'+
							'<img id="imgSalida_'+e+'" '+
							'src="http://pngimages.net/sites/default'+
							'/files/add-a-picture-png-image-15339.png"'+
							'width="25" height="25"/>'+
						'</label>'+
						'<input id="opcion'+e+'" type="text" name="opcion'+e+'"'+
						'class="form-control" placeholder="Pregunta"  required />' +
						'<input name="imagen'+e+'" id="imagen'+e+'" type="file"'+
						'style="display: none;" />'+
					'</div>'
					);
	//muestra los input para la previzualizacion
	var preview = $(
					'<div id="check'+e+'">'+
						'<div style="padding: 5px;"></div>'+
						'<label class="checkbox-inline">'+
							'<img id="foto'+e+'" src="http://pngimages.net/'+
							'sites/default/files/add-a-picture-png-image-15339.png"'+
							'width="25" height="25">'+
							'<strong id="pregunta'+e+'"></strong>'+
						'</label>'+
						'<div style="padding: 5px;"></div>'+
						'<label class="checkbox-inline cerrada"><input type="radio" value="1">SI</label>'+
						'<label class="checkbox-inline cerrada"><input type="radio" value="0">NO</label>'+
						'<label class="checkbox-inline abierta"><input type="radio" value="1">SI</label>'+
						'<label class="checkbox-inline abierta"><input type="radio" value="0">NO</label>'+
						'<label class="checkbox-inline abierta"><input type="radio" value="0">PUEDE SER</label>'+
						'<input type="text" class="form-control resp_abierta" placeholder="responder">'+
					'</div>'
					);
	var prevDinamic = $('<div id="check'+e+'">'+
							'<div style="padding: 5px;"></div>'+
							'<div class="form-inline">'+
								'<label class="checkbox-inline">'+
									'<img id="foto'+e+'" src="http://pngimages.net/sites'+
									'/default/files/add-a-picture-png-image-15339.png"'+
									' width="70" height="60">'+
									'<input type="radio" name="respuesta">'+
									'<strong id="pregunta'+e+'"></strong>'+
							'</div>'+
						'</div>'
						);

	if (e >= 10 ){

	} else {
		if (tipo_encuesta == 'dinamica') {
			$(".contenedor").append(pregDinamica);
			$("#respuestas").append(prevDinamic);
		} else {
			$(".contenedor").append(pregunta);
			$("#respuestas").append(preview);
		}	
	}

	if (tipo_encuesta == 'cerrada') {
		$('.abierta').remove();
		$('.resp_abierta').remove();
	} else if (tipo_encuesta == 'abierta') {
		$('.cerrada').remove();
		$('.resp_abierta').remove();
	} else if (tipo_encuesta == 'resp_abierta') {
		$('.abierta').remove();
		$('.cerrada').remove();
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
			$("#check"+e).remove();
		}
	}); 
});
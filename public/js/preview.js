/*esta funcion es para la previzualizacion de imagenes pero solo sirve para un elemento
para los demas 9 elementos se encuentra en el archivo botonencuesta.js en la funcion addImagen
*/
$(document).ready(function(){
 $(function() {
  $('#imagen1').change(function(x) {
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
      $('#imgSalida').attr("src",result);
      $('#foto1').attr("src",result);
     }
  });
/*previzualizacion en editar encuesta */
 $(function() {
  $('#foto').change(function(x) {
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
      $('#portada').attr("src",result);
     }
  });

var i;
// sacamos las funciones hacia afuera del docready
function addImage(x) {
  var file = x.target.files[0],
    imageType = /image.*/;

  if (!file.type.match(imageType))
    return;

  var reader = new FileReader();
  // guardamos el ID del input[file] dentro de cada reader
  reader.elId = x.target.id;
  reader.onload = function(x) {
    var result = x.target.result;
    // recuperamos el ID y apuntamos a la img
    $('#' + x.target.elId + 'salida').attr("src", result);
  };
  reader.readAsDataURL(file);
}

// una sola funcion docready
$(function() {
  for (i = 1; i < 11; i++) {
    var selector = '#imagen' + i;
    console.log("selector:", selector);
    $(selector).change(function(x) {
      addImage(x);
    });
  }
});
/*FIN DE PREVIZUALIZACION EN EDITAR ENCUESTA*/
});

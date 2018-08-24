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
});

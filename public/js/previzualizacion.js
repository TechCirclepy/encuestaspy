$(document).on('change keyup', '#titulo', function(e){
    $('#resultado').html( $(this).val() );
});
$(document).on('change keyup', '#fecha_finalizacion', function(e){
    $('#resultado_fecha').html( $(this).val() );
});
$(document).on('change keyup', '#opcion1', function(e){
    $('#pregunta1').html( $(this).val() );
});
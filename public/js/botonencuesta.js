$(document).ready(function(){
	$('.oculto4').hide();
	$('.oculto5').hide();
	$('.oculto6').hide();
	$('.oculto7').hide();
	$('.oculto8').hide();
	$('.oculto9').hide();
	$('.oculto10').hide();
	$('.oculto').hide();
	$("#abrir").on( "click", function() {
		$('.oculto').show();
		$('#abrir').attr('id', 'abrir4');
		$("#abrir4").on( "click", function() {
				$('.oculto4').show();
				$('#abrir4').attr('id', 'abrir5');
				$("#abrir5").on( "click", function() {
						$('.oculto5').show();
						$('#abrir5').attr('id', 'abrir6');
						$("#abrir6").on( "click", function() {
								$('.oculto6').show();
								$('#abrir6').attr('id', 'abrir7');
								$("#abrir7").on( "click", function() {
										$('.oculto7').show();
										$('#abrir7').attr('id', 'abrir8');
										$("#abrir8").on( "click", function() {
												$('.oculto8').show();
												$('#abrir8').attr('id', 'abrir9');
												$("#abrir9").on( "click", function() {
														$('.oculto9').show();
														$('#abrir9').attr('id', 'abrir10');
														$("#abrir10").on( "click", function() {
															$('.oculto10').show();
													});
												});
										});
								});
						});
				});
		});
	});
});
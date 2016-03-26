//variaveis globais



$("#radio_disc-0").click(function() {
	if ($("#disc_nome").prop('disabled') == true){
		$("#disc_nome").prop('disabled', false);
		//$("#input_estrangeiro").prop('required', false);//remove o required do input_estrangeiro
	}
	$("#disc_codigo").prop('disabled', true);
});

$("#radio_disc-1").click(function() {
	if ($("#disc_codigo").prop('disabled') == true){
		$("#disc_codigo").prop('disabled', false);
		//$("#input_estrangeiro").prop('required', true);//seta input_estrangeiro pra required
	}
	$("#disc_nome").prop('disabled', true);
});



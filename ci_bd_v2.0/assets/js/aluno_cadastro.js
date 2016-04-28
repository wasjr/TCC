//variaveis globais


if ($("#nac_br").prop('checked') == true || $("#nac_est").prop('checked') == false){
	$("#input_estrangeiro").prop('disabled', true);
	$("#input_estrangeiro").prop('required', false);
}

else {
	$("#input_estrangeiro").prop('disabled', false);
	$("#input_estrangeiro").prop('required', true);
}


$("#nac_br").click(function() {
	if ($("#input_estrangeiro").prop('disabled') == false){
		$("#input_estrangeiro").prop('disabled', true);
		//$("#input_estrangeiro").prop('required', false);//remove o required do input_estrangeiro
	}
});

$("#nac_est").click(function() {
	if ($("#input_estrangeiro").prop('disabled') == true){
		$("#input_estrangeiro").prop('disabled', false);
		//$("#input_estrangeiro").prop('required', true);//seta input_estrangeiro pra required
	}
});



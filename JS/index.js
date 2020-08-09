function gerarPersonagem(){
	$.ajax({
		url: "./API/createPersonagem.php",
		dataType: "json",
		type: 'GET',
		success: function (result, status, xhr) {
			$("#peleSpan").html(result.pele);
			$("#olhosSpan").html(result.olhos);
			$("#bocaSpan").html(result.boca);
			$("#cabeloSpan").html(result.cabelo);
			$("#narizSpan").html(result.nariz);
			$("#makeSpan").html(result.make);
			//$("#detalhesSpan").html(result.detalhes);
		},
		error: function (xhr, status, error) {
			showError(error);
		}
	});
}

function showError(error){
	document.getElementById("errorFill").style.visibility = "visible";
	document.getElementById("errorMessage").innerHTML = error;
}

function closeError(){
	document.getElementById("errorFill").style.visibility = "hidden";
	document.getElementById("errorMessage").innerHTML = "";
}
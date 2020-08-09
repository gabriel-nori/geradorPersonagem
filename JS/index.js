var
	cabelos = [
		"curto platinado",
		"medio platinado",
		"longo platinado",
		"curto colorido",
		"medio colorido",
		"longo colorido",
		"curto natural",
		"medio natural",
		"longo natural",
		"curto com mechas",
		"medio com mechas",
		"longo com mechas"
	],
	peles = [
		"branca",
		"preta",
		"latina",
		"colorida"
	],
	olhos = [
		"grandes e normal",
		"pequenos e normal",
		"1 e normal",
		"mais de 2 e normal",
		"grandes e colorido",
		"pequenos e colorido",
		"1 e colorido",
		"mais de 2 e colorido",
		"grandes e todo branco",
		"pequenos e todo branco",
		"1 e todo branco",
		"mais de 2 e todo branco",
		"grandes e todo preto",
		"pequenos e todo preto",
		"1 e todo preto",
		"mais de 2 e todo preto"
	],
	bocas = [
		"pequena",
		"média",
		"grande"
	],
	narizes = [
		"pequeno",
		"médio",
		"grande",
		"sem"
	],
	makes = [
		"drag",
		"natural",
		"sem",
		"colorida",
		"artística"
	],
	detalhes = [
		"sardas",
		"óculos",
		"piercing",
		"tatoo",
		"acessórios no cabelo"
	],
	cabelo = "",
	pele = "",
	olho = "",
	boca = "",
	nariz = "",
	make = "",
	detalhe = "";

function gerarPersonagem(){
	cabelo = cabelos[Math.floor(Math.random() * Math.floor(cabelos.length))];
	document.getElementById("cabeloSpan").innerHTML = cabelo;

	pele = peles[Math.floor(Math.random() * Math.floor(peles.length))];
	document.getElementById("peleSpan").innerHTML = pele;

	olho = olhos[Math.floor(Math.random() * Math.floor(olhos.length))];
	document.getElementById("olhosSpan").innerHTML = olho;

	boca = bocas[Math.floor(Math.random() * Math.floor(bocas.length))];
	document.getElementById("bocaSpan").innerHTML = boca;

	nariz = narizes[Math.floor(Math.random() * Math.floor(narizes.length))];
	document.getElementById("narizSpan").innerHTML = nariz;

	make = makes[Math.floor(Math.random() * Math.floor(makes.length))];
	document.getElementById("makeSpan").innerHTML = make;

	var
		detalheIndex1 = Math.floor(Math.random() * Math.floor(detalhes.length)),
		detalheIndex2 = detalheIndex1;
	while(true){
		detalheIndex2 = Math.floor(Math.random() * Math.floor(detalhes.length));
		if(detalheIndex2 != detalheIndex1){
			break;
		}
	}
	document.getElementById("detalhesSpan").innerHTML = detalhes[detalheIndex1] + " e " + detalhes[detalheIndex2];

}

function showError(error){
	document.getElementById("errorFill").style.visibility = "visible";
	document.getElementById("errorMessage").innerHTML = error;
}

function closeError(){
	document.getElementById("errorFill").style.visibility = "hidden";
	document.getElementById("errorMessage").innerHTML = "";
}
<?php
	//require "./DB/connection.php";
	$conexao = mysqli_connect("localhost", "u179156626_admin", ">gXuR1g9xS", "u179156626_personagem") or die ("A conexão não foi executada com sucesso");
	
	header('Content-Type: application/javascript; charset=utf8');

	$queryGetPele = "SELECT * FROM pele";
	$queryGetOlhos = "SELECT * FROM olhos";
	$queryGetBoca = "SELECT * FROM boca";
	$queryGetCabelo = "SELECT * FROM cabelo";
	$queryGetNariz = "SELECT * FROM nariz";
	$queryGetMake = "SELECT * FROM make";
	$queryGetDetalhe = "SELECT * FROM detalhe";
	$peles = "";
	$olhos = "";
	$bocas = "";
	$cabelos = "";
	$narizes = "";
	$makes = "";
	$detalhes = "";
	$qtdDetalhes = 2;

	if(isset($_POST['qtdDetalhes'])){
		$qtdDetalhes = $_POST['qtdDetalhes'];
	}

	$peles = mysqli_fetch_all(mysqli_query($conexao, $queryGetPele));
	$olhos = mysqli_fetch_all(mysqli_query($conexao, $queryGetOlhos));
	$bocas = mysqli_fetch_all(mysqli_query($conexao, $queryGetBoca));
	$cabelos = mysqli_fetch_all(mysqli_query($conexao, $queryGetCabelo));
	$narizes = mysqli_fetch_all(mysqli_query($conexao, $queryGetNariz));
	$makes = mysqli_fetch_all(mysqli_query($conexao, $queryGetMake));
	$detalhes = mysqli_fetch_all(mysqli_query($conexao, $queryGetDetalhe));

	function insertPersonagem(){
		$pele = $peles[rand(0,sizeof($peles))];
		$olho = $olhos[rand(0,sizeof($olhos))];
		$boca = $bocas[rand(0,sizeof($bocas))];
		$cabelo = $cabelos[rand(0,sizeof($cabelos))];
		$nariz = $narizes[rand(0,sizeof($narizes))];
		$make = $makes[rand(0,sizeof($makes))];

		$personagem = array(
			"pele" => $pele['nome'],
			"olhos" => $olho['nome'],
			"boca" => $boca['nome'],
			"cabelo" => $cabelo['nome'],
			"nariz" => $nariz['nome'],
			"make" => $make['nome']
		);

		echo json_encode($personagem);
	}

	function insertDetalhe($personagemId, $detalheId){

	}

	insertPersonagem();
?>
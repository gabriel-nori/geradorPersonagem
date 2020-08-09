<?php
	require "./DB/connection.php";

	$queryGetPele = "SELECT * FROM pele";
	$queryGetOlhos = "SELECT * FROM olhos";
	$queryGetBoca = "SELECT * FROM boca";
	$queryGetCabelo = "SELECT * FROM cabelo";
	$queryGetNariz = "SELECT * FROM nariz";
	$queryGetMake = "SELECT * FROM make";
	$queryGetDetalhe = "SELECT * FROM detalhe";
	
	header('Content-Type: application/javascript; charset=utf8');

	if(isset($_POST['qtdDetalhes'])){
		$qtdDetalhes = $_POST['qtdDetalhes'];
	}

	insertPersonagem($qtdDetalhes);

	function getPele(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetPele));}
	function getOlhos(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetOlhos));}
	function getBoca(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetBoca));}
	function getCabelo(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetCabelo));}
	function getNariz(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetNariz));}
	function getMake(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetMake));}
	function getDetalhes(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetDetalhe));}

	function insertPersonagem($detalhes){
		$peles = getPele();
		$olhos = getOlhos();
		$bocas = getBoca();
		$cabelos = getCabelo();
		$narizes = getNariz();
		$makes = getMake();
		$detalhes = getDetalhes();

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
?>
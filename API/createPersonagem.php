<?php
	//require "./DB/connection.php";
	private $conexao = mysqli_connect("localhost", "u179156626_admin", ">gXuR1g9xS", "u179156626_personagem") or die ("A conexão não foi executada com sucesso");

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

	function getPele(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetPele));}
	function getOlhos(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetOlhos));}
	function getBoca(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetBoca));}
	function getCabelo(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetCabelo));}
	function getNariz(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetNariz));}
	function getMake(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetMake));}
	function getDetalhes(){return mysqli_fetch_array(mysqli_query($this->conexao, $queryGetDetalhe));}

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
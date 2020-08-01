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
	
	/*if(isset($_POST['senha'])&&isset($_POST['nome'])&&isset($_POST['email'])){
	    $nome=$_POST['nome'];
	    $senha=$_POST['senha'];
	    $email=$_POST['email'];
	    $senha=password_hash($senha, PASSWORD_BCRYPT);
		$query="select u179156626_anima.insert_dono('$nome','$senha','$email') as 'id';";
		$resultado = mysqli_query($conexao, $query);	
		if (mysqli_num_rows($resultado)!=1){
			$dados= array("id" => -2,);
		}
		else{
			while($linha=mysqli_fetch_array($resultado)){
				$dados=array("id" => $linha['id']);
			}
			if($dados['id']>0){
			    $id=$dados['id'];
			    $stringToken=RandomString();
			    $token=password_hash($stringToken, PASSWORD_BCRYPT);
			    $query="update usuario set usuario_token = '$token' where usuario_id = '$id';";
			    $resultado = mysqli_query($conexao, $query);
			    $dados=array("id" => $id, "token" => $token);
			}
		}
		echo json_encode($dados);
	}*/

	function getPele(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetPele));}
	function getOlhos(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetOlhos));}
	function getBoca(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetBoca));}
	function getCabelo(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetCabelo));}
	function getNariz(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetNariz));}
	function getMake(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetMake));}
	function getDetalhes(){return mysqli_fetch_array(mysqli_query($conexao, $queryGetDetalhe));}

	function insertPersonagem(){
		$peles = getPele();
		$olhos = getOlhos();
		$bocas = getBoca();
		$cabelos = getCabelo();
		$narizes = getNariz();
		$makes = getMake();
		$detalhes = getDetalhes();

		$pele = sizeof($peles);

		//echo json_encode();
	}

	function insertDetalhe($personagemId, $detalheId){

	}
?>
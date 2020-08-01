<?php
	require "../credentials.php";
	$conexao = mysqli_connect($servername, $username, $password, $dbname) or die ("A conexão não foi executada com sucesso");
?>
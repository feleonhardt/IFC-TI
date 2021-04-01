<?php
	include 'conf/conf.inc.php';
	include 'connect/connect.php';

	$acao = '';
	if(isset($_GET["acao"]))
		$acao = $_GET["acao"];

	if(isset($_GET["tabela"]))
		$tabela = $_GET["tabela"];

	if(isset($_GET["nome"]))
		$nome = $_GET["nome"];

	if($acao == "excluir"){
		$codigo = 0;
		if(isset($_GET["codigo"])){
			$codigo = $_GET["codigo"];
			echo $sql = "DELETE FROM $tabela where codigo = $codigo";
			$result = mysqli_query($conexao,$sql);
			header("location:".$nome);
		}
	}
	if($acao == "salvar"){
		echo $sql = "insert into $tabela values (null, '$descricao')";
		$result = mysqli_query($conexao,$sql);
		header("location:".$nome);
	}
?>
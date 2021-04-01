<?php
	include 'conf/conf_clientes.php';

	$conexao = mysqli_connect($url,$usuario,$password,$dbname);

	if(mysqli_connect_errno())
		echo mysqli_connect_error();
?>
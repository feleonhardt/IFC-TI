<?php
	$altura = isset($_GET['altura']) ? $_GET['altura'] : 0;
	$titulo = "Exercício 11";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Altura: <input type="text" name="altura" id="altura" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Calcular">
	</form>
		<?php $peso = (72.7*$altura)-58;?>
	<h3><?php 
		echo "Altura: ".$altura." m | ";
		echo "Peso Ideal = ".$peso." kg";
		?></h3>
</body>
</html>
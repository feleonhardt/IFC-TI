<!DOCTYPE html>
<?php
	$altura = 1.6;
	$titulo = "Exercício 12";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<h3><?php 
			$pesoHomem = (72.7*$altura)-58;
			$pesoMulher = (62.1*$altura)-44.7;
			echo "Altura: ".$altura." m";
	 		echo "<br>Peso Ideal Homem = ".$pesoHomem;
	 		echo "<br>Peso Ideal Mulher = ".$pesoMulher;
	 	?></h3>
</body>
</html>
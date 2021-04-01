<!DOCTYPE html>
<?php
	$altura = 1.6;
	$titulo = "Exercício 11";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $peso = (72.7*$altura)-58;?>
	<h3><?php 
		echo "Altura: ".$altura." m | ";
		echo "Peso Ideal = ".$peso." kg";
		?></h3>
</body>
</html>
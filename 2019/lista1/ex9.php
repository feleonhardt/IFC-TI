<!DOCTYPE html>
<?php
	$far = 67;
	$titulo = "Exercício 9";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $celsius = (5*($far-32)/9);?>
	<h3><?php echo "Farenheit = ".$far." | Celsius = ".$celsius;?></h3>
	
</body>
</html>
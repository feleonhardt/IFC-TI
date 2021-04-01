<!DOCTYPE html>
<?php
	$far = isset($_GET['far']) ? $_GET['far'] : 0;
	$titulo = "EXERCÍCIO 9";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
	<form action="" method="get">
		Farenheit: <input type="text" name="far" id="far" placeholder="Digite aqui...">
		<input type="submit" name="enviar" id="enviar" value="Converter">
	</form>
		<?php $celsius = (5*($far-32)/9);?>
	<h3><?php echo "Farenheit = ".$far." | Celsius = ".$celsius;?></h3>
	
</body>
</html>
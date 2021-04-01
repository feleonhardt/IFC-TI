<!DOCTYPE html>
<?php
	$porHora = 4.0;
	$trabalhadas = 10;
	$titulo = "Exercício 8";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php $total = $porHora*$trabalhadas;?>
	<h3><?php echo "Por Hora = R$ ".$porHora." | Horas Trabalhadas = ".$trabalhadas." | Total = R$ ".$total;?></h3>
	
</body>
</html>
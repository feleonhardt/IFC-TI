<!DOCTYPE html>
<?php
	$tamanho = 100;
	$titulo = "Exercício 15";
	?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
	<link rel="shortcut icon" href="img/icon.png">
</head>
<body>
		<?php 
			$litros = $tamanho/3;
			$latas = ceil($litros/18);
			$reais = $latas*80;
			echo "M²: ".$tamanho;
			echo "<br>Latas: ".$latas;
			echo "<br>Reais: R$ ".$reais;
		?>
</body>
</html>